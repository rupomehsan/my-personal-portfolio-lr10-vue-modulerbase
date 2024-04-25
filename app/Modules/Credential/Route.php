<?php

use App\Modules\Credential\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('credentials', Controller::class);
    Route::post('credentials/bulk-action', [Controller::class, 'bulkAction']);
});