<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['api'], 'prefix' => config('auth.route')], function () {
    Route::post('login', [AuthController::class, 'login']);
    // Route::post('logout', 'Axiostudio\LaravelAuthApi\Controllers\AuthController@logout');
    // Route::post('register', 'Axiostudio\LaravelAuthApi\Controllers\AuthController@register');
    // Route::post('verify-email/{user}', 'Axiostudio\LaravelAuthApi\Controllers\AuthController@verifyEmail');
    // Route::post('password/email', 'Axiostudio\LaravelAuthApi\Controllers\ForgotPasswordController@sendResetLinkEmail');
    // Route::post('password/reset', 'Axiostudio\LaravelAuthApi\Controllers\ResetPasswordController@reset');
});