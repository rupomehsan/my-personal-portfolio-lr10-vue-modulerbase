<?php

namespace App\Modules\TodoList\Actions;

use App\Modules\TodoList\Validations\Validation;

class Update
{
    static $model = \App\Modules\TodoList\Models\Model::class;

    public static function execute(Validation $request, $id)
    {
        try {
            // dd($request->all());
            if (!$data = self::$model::query()->where('id', $id)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }
            if ($request->is_task_complete) {
                $data->is_complete =  $data->is_complete == 0 ? 1 : 0;
            }
            $requestData = $request->validated();
            $data->update($requestData);
            return messageResponse('Item updated successfully');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
