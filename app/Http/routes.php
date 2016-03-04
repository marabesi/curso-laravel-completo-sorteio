<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * View teste para enviar o email para o convidado
 */
Route::get('de-email', function() {
    return view('de_email', [ 'params' => [
        'de_usuario_github' => 'marabesi',
        'de_email' => 'matheusmatheus@gmail.com',
        'para_usuario_github' => 'isaquesb',
        'para_email' => 'isaque@isq.com.br',
        'token' => 'token'
    ] ]);
});

Route::controllers([
    'curso' => 'Controller'
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
