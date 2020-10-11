<?php


namespace App\Traits;


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

}
