<?php

namespace App\Modules\Project\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;

class ViewModel extends EloquentModel
{
    protected $table = "project_views";
    protected $guarded = [];
}
