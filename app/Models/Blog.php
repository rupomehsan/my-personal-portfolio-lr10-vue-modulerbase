<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'title', 'description', 'image', 'url', 'type', 'additional_content_one', 'additional_content_two', 'additional_content_three', 'status'];

    protected $casts  = ['category_id' => 'array'];

    public function getStatusBadgeAttribute()
    {
        $badges = [
            'active' => 'success',
            'inactive' => 'warning',
            'pending' => 'info',
        ];
        return $badges[$this->status];
    }
}
