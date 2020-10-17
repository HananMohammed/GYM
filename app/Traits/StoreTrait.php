<?php


namespace App\Traits;


Trait StoreTrait
{
    use ImageProcess ,InputDataProcess;

    /**
     * @param $request
     * @param $model
     * @throws \WebPConvert\Convert\Exceptions\ConversionFailedException
     */
    public function storeData($request, $model)
    {
        $model = $this->storeOrUpdateInputData($request, $model) ;

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
