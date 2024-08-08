<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
Route::controller(UserController::class)->group(function(){
    Route::get('/','index')->name('users');
    Route::post('save','save')->name('users.save');
    Route::get('list','list')->name('users.list');
    Route::delete('delete/{user}','delete')->name('users.delete');
    Route::post('check-already-exists','checkAlreadyExists')->name('users.check.already.exists');
});
