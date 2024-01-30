<?php

namespace App\Modules\BlogManagement\Blog\Actions;

use App\Modules\BlogManagement\Blog\Actions\Validation;
use Illuminate\Support\Facades\Storage;

class Update
{
    static $model = \App\Modules\BlogManagement\Blog\Model::class;

    public static function execute(Validation $request, $id)
    {
        try {
            if (!$data = self::$model::query()->where('id', $id)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }
            $imageName = $data->thumbnail_image;
            if ($request->hasFile('thumbnail_image')) {
                $image = $request->file('thumbnail_image');
                $currentDate = now()->format('Y/m');
                $imageName = Storage::disk('public')->put("uploads/blog/{$currentDate}", $image);
            }
            $data->update(array_merge(
                $request->validated(),
                [
                    "thumbnail_image" => $imageName,
                ]
            ));
            return messageResponse('Item updated successfully');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
