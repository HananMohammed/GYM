<?php


namespace App\Traits;


Trait StoreTrait
{

    /**
     * @param $request
     * @param $model
     * @throws \WebPConvert\Convert\Exceptions\ConversionFailedException
     */
    public function storeData($request, $model)
    {
        foreach ( $request->input() as $key => $value)
        {
            if($key !='_token' && $key != '_method')
            {
                (is_array($value)) ? $model->$key = json_encode($value)
                    : $model->$key = $value ;
            }
        }
        $model->created_by = auth()->user()->id;

        if (is_array($request->file()))
        {
            foreach ($request->file() as $key =>$value)
            {
                if (is_array($value)){
                    $imagesName = $this->upload_multi_image($value) ;
                    $this->storeImage($model, $imagesName, $key);
                }else{
                    $imageName = $this->upload_image($value) ;
                    $this->storeImage($model, $imageName, $key);
                }
            }
        }

        $model -> save() ;
    }

     /**
     * @param $model
     * @param $values
     * @param $key
     */
    public function storeImage($model, $values , $key){

        if (is_array($values)){
             foreach ($values as $value){
              $model->image()->create([
                  $key =>$value
               ]);
             }
        }else{
            $model->image()->create([
                $key =>$values
            ]);
        }

    }
}
