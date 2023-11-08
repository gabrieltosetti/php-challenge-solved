<?php

use App\Infrastructure\Http\Controllers\V1\HelloController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::get('/hello', [HelloController::class, 'index']);
});
