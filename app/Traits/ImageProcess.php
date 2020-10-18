<?php


namespace App\Traits;


use App\Models\Admin\Image;
use Illuminate\Support\Facades\File;
use WebPConvert\WebPConvert;

trait ImageProcess
{

    /**
     * @param $filesRequest
     * @throws \WebPConvert\Convert\Exceptions\ConversionFailedException
     */
    public function upload_multi_image($filesRequest)
    {
        $imagesName = [] ;

        foreach ($filesRequest as $request)
        {
            $imagesName[] =$this->upload_image($request) ;
        }

        return $imagesName ;
    }
    /**
     * @param $fileRequest
     * @return string
     * @throws \WebPConvert\Convert\Exceptions\ConversionFailedException
     */
    public function upload_image($fileRequest)
    {
        $imageName = 'image'. time() . '.' . $fileRequest->getClientOriginalExtension();
        $fileRequest->move(storage_path('app/public/images'), $imageName);
        $source =storage_path('app/public/images/'.$imageName);
        $output = $source.'.webp';
        WebPConvert::convert( $source , $output) ;

        return $imageName ;
    }


    /**
     * @param $modelRecord
     */
    public function deleteImage($modelRecord)
    {
        $image = $modelRecord->image()->pluck('image')[0];

        $id = $modelRecord->image()->pluck('id')[0];

        if (isset($image))
        {
            $image_path =storage_path('app/public/images').'/'.$image;

            $image_path_webp = $image_path.'.webp';

            File::delete([$image_path ,$image_path_webp]);
        }

        Image::find($id)->delete();

        $modelRecord->delete();
    }

}
