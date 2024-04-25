<?php

namespace App\Modules\BlogManagement\Blog\Actions;



class Show
{
    static $model = \App\Modules\BlogManagement\Blog\Model::class;
    static $ViewModel = \App\Modules\BlogManagement\Blog\ViewModel::class;

    public static function execute($id)
    {
        try {
            $with = ['categories'];
            if (!$data = self::$model::query()->with($with)->where('id', $id)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }
            return entityResponse($data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }

    public static function blogDetailsBySlug($slug)
    {
        try {
            $with = ['comments'];
            if (!$data = self::$model::query()->with($with)->withCount('views')->where('slug', $slug)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }
            self::$ViewModel::create([
                'blog_id' => $data->id,
                'ip' => request()->ip(),
            ]);
            return entityResponse($data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
