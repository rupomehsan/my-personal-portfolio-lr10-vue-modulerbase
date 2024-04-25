<?php

namespace App\Modules\Project\Actions;

use App\Modules\Project\Validations\Validation;
use Illuminate\Support\Facades\Storage;

class Store
{
    static $model = \App\Modules\Project\Models\Model::class;

    public static function execute(Validation $request)
    {
        try {

            $requestData = $request->validated();
            $imageName = [];
            if ($request->images && count($request->images)) {
                foreach ($request->images as $image) {
                    $currentDate = now()->format('Y/m');
                    $imageName[] = Storage::disk('public')->put("uploads/projects/{$currentDate}", $image);
                }
                $requestData['images'] = $imageName;
            }
            if (self::$model::query()->create($requestData)) {
                return messageResponse('Item added successfully', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
