<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('enviar-email', 'EmailController@sendMail')->name('email');

Route::get('cadastrar-usuario', 'UserController@create')->name('user.create');

Route::post('cadastrar-usuario', 'UserController@store')->name('user.store');

Route::get('escrever-mensagem', 'UserController@write')->name('write');

Route::post('gerar-mensagens', 'UserController@writeMessage')->name('write.save');