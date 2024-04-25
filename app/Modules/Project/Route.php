<?php

use App\Modules\Project\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('projects', Controller::class);
    Route::post('projects/bulk-action', [Controller::class, 'bulkAction']);
    Route::get('projects-details/{slug}', [Controller::class, 'projectDetailsBySlug']);
    Route::post('project-comment', [Controller::class, 'projectComment']);
});
