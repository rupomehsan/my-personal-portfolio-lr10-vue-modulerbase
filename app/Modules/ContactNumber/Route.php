<?php

use App\Modules\ContactNumber\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('contact-numbers', Controller::class);
    Route::post('contact-numbers/bulk-action', [Controller::class, 'bulkAction']);
});