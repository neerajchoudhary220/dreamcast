<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;




Route::controller(AuthController::class)->middleware('guest')->group(function(){
    Route::get('/','login')->name('login');
    Route::post('/store','store')->name('admin.store');

});

Route::middleware('auth')->group(function(){
    Route::controller(UserController::class)->prefix('users')->group(function(){
        Route::get('/','index')->name('users');
        Route::post('save','save')->name('users.save');
        Route::get('list','list')->name('users.list');
        Route::delete('delete/{user}','delete')->name('users.delete');
        Route::post('check-already-exists','checkAlreadyExists')->name('users.check.already.exists');
        Route::get('test','test');
    });

    Route::get('logout',[AuthController::class, 'logout'])->name('logout');
});

