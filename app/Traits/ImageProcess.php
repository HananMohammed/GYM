<?php


namespace App\Traits;


use App\Models\Admin\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use WebPConvert\WebPConvert;

trait ImageProcess
{
    public function upload_image($fileRequest)
    {
        $imageName = 'image'. time() . '.' . $fileRequest->getClientOriginalExtension();
        $fileRequest->move(storage_path('app/public/images'), $imageName);
        $source =storage_path('app/public/images/'.$imageName);
        $output = $source.'.webp';
        WebPConvert::convert( $source , $output) ;

        return $imageName ;
    }

    public function deleteImage($id)
    {
        if (isset($id))
        {
            $data = Image::find($id);
            $old_image_path =storage_path('app/public/images').'/'.$data->image;
            $old_image_path_webp = $old_image_path.'.webp';
            File::delete([$old_image_path ,$old_image_path_webp]);
        }
    }


}
