<?php

use App\Modules\BloodDoner\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('blood-doners', Controller::class);
    Route::post('blood-doners/bulk-action', [Controller::class, 'bulkAction']);
});