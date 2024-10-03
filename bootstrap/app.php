<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        using: function(illuminate\Routing\Router $router){
           $router-> middleware('api')
                    ->prefix('api')
                    ->group(base_path('routes/api.php'));
            $router->middleware('web')
                    ->prefix('web')
                    ->group(base_path('routes/web.php'));
            $router->middleware('web')
                    ->prefix('admin')
                    ->group(base_path('routes/admin.php'));

        }
        
            
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
