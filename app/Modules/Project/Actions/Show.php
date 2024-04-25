<?php

namespace App\Modules\Project\Actions;

use Illuminate\Support\Facades\DB;

class Show
{
    static $model = \App\Modules\Project\Models\Model::class;
    static $ViewModel = \App\Modules\Project\Models\ViewModel::class;

    public static function execute($id)
    {
        try {
            $with = [];
            if (!$data = self::$model::query()->with($with)->where('id', $id)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }
            return entityResponse($data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
    public static function projectDetailsBySlug($slug)
    {

        try {
            $with = ['comments'];
            if (!$data = self::$model::query()->with($with)->withCount('views')->where('slug', $slug)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }
            self::$ViewModel::create([
                'project_id' => $data->id,
                'ip' => request()->ip(),
            ]);
            return entityResponse($data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
