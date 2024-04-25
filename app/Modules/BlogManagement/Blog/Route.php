<?php

use App\Modules\BlogManagement\Blog\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->middleware('auth:api')->group(function () {
    Route::apiResource('blogs', Controller::class);
    Route::post('blogs/bulk-action', [Controller::class, 'bulkAction']);
});
Route::get('get-all-blogs', [Controller::class, 'index']);
Route::get('blog-details/{slug}', [Controller::class, 'blogDetailsBySlug']);
Route::post('blog-comment', [Controller::class, 'blogComment']);
