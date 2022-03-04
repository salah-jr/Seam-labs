<?php

use App\Http\Controllers\AssessmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|---------------------------------ee-----------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AssessmentController::class)->group(function () {
    Route::prefix('part-one')->group(function () {
        Route::post('problem-one', 'problemOne');
        Route::get('problem-two', 'problemTwo');
        Route::post('problem-three', 'problemThree');
        Route::post('problem-four', 'problemFour');
    });
    Route::post('part-two/orders/create', 'createOrder');
});
