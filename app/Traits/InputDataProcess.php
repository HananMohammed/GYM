<?php


namespace App\Traits;


trait InputDataProcess
{
    /**
     * @param $request
     * @param $model
     * @return mixed
     */
    public function storeOrUpdateInputData($request, $model){

        foreach ( $request->input() as $key => $value)
        {
            if($key !='_token' && $key != '_method')
            {
                (is_array($value)) ? $model->$key = json_encode($value)
                    : $model->$key = $value ;
            }
        }

        $model->created_by = auth()->user()->id;

        $model -> save() ;

        return $model ;

    }

}
