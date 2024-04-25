<?php

namespace App\Modules\TodoList\Actions;

use App\Modules\TodoList\Validations\Validation;


class Store
{
    static $model = \App\Modules\TodoList\Models\Model::class;

    public static function execute(Validation $request)
    {
        try {
            // dd($request->all());
            $requestData = $request->validated();
            if (self::$model::query()->create($requestData)) {
                return messageResponse('Item added successfully', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
