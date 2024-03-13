<?php

namespace App\Modules\Category\Actions;

use App\Modules\Category\Validations\Validation;


class Store
{
    static $model = \App\Modules\Category\Models\Model::class;

    public static function execute(Validation $request)
    {
        try {

            $imageName = 'dummy.png';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = uploader($image, 'uploads/category');
            }
            $requestData = $request->validated();
            $requestData['category_type'] = json_decode($requestData['category_type']);
            $requestData['image'] = $imageName;
            if ($requestData['parent_id'] && $requestData['parent_id'] == 'on') {
                $requestData['parent_id'] = null;
            }

            if (self::$model::query()->create($requestData)) {
                return messageResponse('Item added successfully', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
