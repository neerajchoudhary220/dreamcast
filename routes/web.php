<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\TestMiddleware;
use Illuminate\Support\Facades\Route;
Route::get('/',function(){
    return view('welcome');
});

Route::controller(TestController::class)->middleware('test')->prefix('test')->group(function(){
    Route::get('/', 'index');
});