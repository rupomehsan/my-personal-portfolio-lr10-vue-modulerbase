<?php

namespace App\Modules\Project\Actions;

use App\Modules\Project\Validations\CommentValidation;
use Illuminate\Support\Facades\Storage;

class ProjectComment
{
    static $model = \App\Modules\Project\Models\CommentModel::class;
    static $productModel = \App\Modules\Project\Models\Model::class;

    public static function execute(CommentValidation $request)
    {
        try {

            // dd($request->all());

            $requestData = $request->validated();
            $product = self::$productModel::where('slug', $request->slug)->first();
            $requestData['project_id'] = $product->id;
            if (self::$model::query()->create($requestData)) {
                return messageResponse('Item added successfully', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
