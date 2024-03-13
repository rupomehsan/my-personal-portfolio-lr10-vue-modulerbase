<?php

namespace App\Modules\Category\Actions;

use App\Modules\Category\Validations\Validation;

class Update
{
    static $model = \App\Modules\Category\Models\Model::class;

    public static function execute(Validation $request, $id)
    {
        try {
            // dd($request->all());
            $requestData = $request->validated();

            if (!$data = self::$model::query()->where('id', $id)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }

            if ($requestData['parent_id'] == $id) {
                return messageResponse('Sorry you should not assing to self', 404, 'error');
            }

            $imageName = $data->image;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = uploader($image, 'uploads/category');
            }
            $requestData['image'] = $imageName;

            if ($requestData['parent_id'] && $requestData['parent_id'] == 'on') {
                $requestData['parent_id'] = null;
            }
            $requestData['category_type'] = json_decode($requestData['category_type']);

            $data->update($requestData);
            return messageResponse('Item updated successfully');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
