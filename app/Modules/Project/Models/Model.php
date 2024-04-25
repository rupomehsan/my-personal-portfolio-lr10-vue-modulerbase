<?php

namespace App\Modules\Project\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;

class Model extends EloquentModel
{
    static $commnetModel = 'App\Modules\Project\Models\CommentModel';
    static $viewModel = 'App\Modules\Project\Models\ViewModel';

    protected $table = "projects";
    protected $guarded = [];
    protected $casts = [
        'images' => 'array'
    ];

    protected static function booted()
    {
        static::created(function ($data) {
            $random_no = random_int(100, 999) . $data->id . random_int(100, 999);
            $slug = $data->title . " " . $random_no;
            $data->slug = Str::slug($slug); //use Illuminate\Support\Str;
            if (strlen($data->slug) > 150) {
                $data->slug = substr($data->slug, strlen($data->slug) - 150, strlen($data->slug));
            }

            $data->save();
        });
    }

    public function scopeActive($q)
    {
        return $q->where('status', 'active');
    }

    public function comments()
    {
        return $this->hasMany(self::$commnetModel, 'project_id');
    }
    public function views()
    {
        return $this->hasMany(self::$viewModel, 'project_id');
    }
}
