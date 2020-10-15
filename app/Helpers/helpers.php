<?php
use \Illuminate\Support\Str;
use WebPConvert\WebPConvert;

if (! function_exists('asset_public')) {
    /**
    * Full asset public path
    */
    function asset_public($path = null)
    {
        return env('FRONT_PUBLIC', 'http://localhost/GYM/public/') . $path;
    }
}
if (! function_exists('image')) {
    /**
     * Full asset public path
     */
    function image($path = null)
    {
        return env('FRONT_PUBLIC_ST ORAGE', 'http://localhost/GYM/public/storage/images/') . $path;
    }
}
if (! function_exists('upload_images')){

    /**
     * @param $fileRequests
     * @return array
     * @throws \WebPConvert\Convert\Exceptions\ConversionFailedException
     */
    function upload_images($fileRequests){

        $totalImages = [];
         for($i=0 ; $i<count($fileRequests) ; $i++)
        {
            $imageName = 'image'. time() . $i . '.' . $fileRequests[$i]->getClientOriginalExtension();

            $fileRequests[$i]->move(public_path('image'), $imageName);

            $source =public_path('image/'.$imageName) ;

            $output = $source.'.webp';
            WebPConvert::convert( $source , $output) ;

            $totalImages[] = $imageName ;
        }

        return  json_encode($totalImages) ;
    }
}

if (! function_exists('current_lang'))
{
    /**
     * Return Current Url With Same Language
     * @return string
     */
    function current_lang()
    {
        $language = Str::after(URL::current(), env('FRONT_PUBLIC', 'http://akwanmedia.com/'));
        return Str::substr($language ,0,2);
    }
}
