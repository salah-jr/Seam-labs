<?php

use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;


Route::controller(AssessmentController::class)->group(function () {
    Route::prefix('part-one')->group(function () {
        Route::post('problem-one', 'problemOne');
        Route::get('problem-two', 'problemTwo');
        Route::post('problem-three', 'problemThree');
        Route::post('problem-four', 'problemFour');
    });
});

Route::post('part-two/orders/create', [OrderController::class, 'create']);
