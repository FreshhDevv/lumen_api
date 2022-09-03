<?php

use App\Http\Controllers\ProductController;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//$router->get('/', function () use ($router) {
//    return $router->app->version();
//});

$router->group(['prefix'=>'api/v1'], function () use($router) {
    $router->get('/products', [ProductController::class, 'index']);

    $router->post('/product', [ProductController::class, 'create']);

    $router->get('/product/{id}', [ProductController::class, 'show']);

    $router->put('/product/{id}', [ProductController::class, 'update']);

    $router->delete('/product/{id}', [ProductController::class, 'destroy']);
});
