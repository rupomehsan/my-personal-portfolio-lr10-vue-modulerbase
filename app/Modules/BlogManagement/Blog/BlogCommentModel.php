<?php

namespace App\Modules\BlogManagement\Blog;

use Illuminate\Database\Eloquent\Model as EloquentModel;



class BlogCommentModel extends EloquentModel
{
    protected $table = "blog_comments";
    protected $guarded = [];
}
