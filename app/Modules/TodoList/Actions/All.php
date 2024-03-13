<?php

namespace App\Modules\TodoList\Actions;

use Illuminate\Support\Facades\DB;

class All
{
    static $model = \App\Modules\TodoList\Models\Model::class;

    public static function execute()
    {
        try {
            // dd(request()->all());
            $offset = request()->input('offset') ?? 10;
            $condition = [];
            $with = ['category:id,title'];
            $data = self::$model::query();
            if (request()->has('status') && request()->input('status')) {
                $condition['status'] = request()->input('status');
            }

            if (request()->has('search') && request()->input('search')) {
                $data = $data->where('title', 'like', '%' . request()->input('search') . '%');
            }

            if (request()->has('get_all') && (int)request()->input('get_all') === 1) {
                $data = $data->with($with)->where($condition)->latest()->get();
            } else {
                $results = self::$model::with($with)->select('category_id', DB::raw('COUNT(*) as count'))->groupBy('category_id')->get();
                // $data = $data->with($with)
                // ->groupBy('category_id')
                // ->get();
                dd($results->toArray());
            }
            return entityResponse($data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
