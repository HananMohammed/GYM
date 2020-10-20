<?php


namespace App\Traits;


trait UpdateTrait
{
    /**
     * @param $request
     * @param $updateModel
     * @throws \WebPConvert\Convert\Exceptions\ConversionFailedException
     */
    public function updateData($request, $updateModel)
    {
        foreach ( $request->input() as $key => $value)
        {
            if($key !='_token' && $key != '_method')
            {
                (is_array($value)) ? $updateModel->$key = json_encode($value)
                    : $updateModel->$key = $value ;
            }
        }

        $updateModel->created_by = auth()->user()->id;

        $model = $updateModel->save() ;

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

                    $this->updateImage($updateModel, $imageName, $key);
                }
            }
        }


    }

    /**
     * @param $model
     * @param $values
     * @param $key
     */
    public function updateImage($model, $values , $key)
    {
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
