<?php

use App\Http\Middleware\TestMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then:function(){
            Route::group(['prefix'=>'admin','middleware'=>'web'],base_path('routes/admin.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
      $middleware->alias([
        'test'=>TestMiddleware::class
      ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
