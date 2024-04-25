<?php

use App\Modules\PersonalNote\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('personal-notes', Controller::class);
    Route::post('personal-notes/bulk-action', [Controller::class, 'bulkAction']);
});