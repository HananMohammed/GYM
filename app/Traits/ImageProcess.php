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
     * @param $id
     */
    public function deleteOldImage($id)
    {
        $image = Image::where('imageable_id' , $id )->get();

        if (isset($image))
            $this->oldImageToDelete($image);

    }


    public function oldImageToDelete($image){

        $old_image_path =storage_path('app/public/images').'/'.$image->image;

        $old_image_path_webp = $old_image_path.'.webp';

        File::delete([$old_image_path ,$old_image_path_webp]);

    }

}
