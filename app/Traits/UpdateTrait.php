<?php


namespace App\Traits;


trait UpdateTrait
{
    use InputDataProcess ,ImageProcess;

    /**
     * @param $request
     * @param $updateModel
     * @throws \WebPConvert\Convert\Exceptions\ConversionFailedException
     */
    public function updateData($request, $updateModel)
    {
        $model = $this->storeOrUpdateInputData($request , $updateModel) ;

        if (is_array($request->file()))
        {
            foreach ($request->file() as $key =>$value)
            {
                if (is_array($value))
                {
                    $imagesName = $this->upload_multi_image($value) ;

                    $this->updateImage($model, $imagesName, $key);

                }else{

                    $imageName = $this->upload_image($value) ;

                    $this->updateImage($model, $imageName, $key);
                }
            }
        }


    }

    /**
     * @param $model
     * @param $values
     * @param $key
     */
    public function updateImage($model, $values , $key){

        $imageRecords = $model->image()->get() ;
        if (is_array($values)){
           for ($record = 0 ; $record<count($imageRecords) ; $record++){
               $imageRecords[$record]->update([
                   $key =>$values[$record]
               ]);
           }
        }else{
            $model->image()->update([
                $key =>$values
            ]);
        }

    }
}
