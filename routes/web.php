<?php

use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::prefix('menu')->group(function(){
    
    //Menu
    Route::get('/', 'MenuController@index')->name('menu');

    //Ajuda
    Route::get('/info', 'MenuController@info')->name('info');

    //Dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    //Usuários
    Route::get('/listausuarios', 'UserController@index')->name('listausuarios');
    Route::get('/listausuarios/{id}', 'UserController@destroy')->name('deletausuarios');
    Route::get('/perfiluser/{id}', 'UserController@show')->name('perfilusu');
    Route::post('/addusu', 'UserController@store')->name('addusu');
    Route::put('/updateusu/{id}', 'UserController@update')->name('updateusu');
    Route::get('/listausupesq/search', 'UserController@search')->name('pesqusu');

    //Clientes
    Route::get('/listaclientes', 'ClientesController@index')->name('listaclientes');
    Route::post('/addcli', 'ClientesController@store')->name('addcli');
    Route::put('/updatecli/{id}', 'ClientesController@update')->name('updatecli');
    Route::get('/perfilcliente/{id}', 'ClientesController@show')->name('perfilcliente');
    Route::get('/listaclientes/{id}', 'ClientesController@destroy')->name('deletacli');
    Route::get('/listaclientespesq/search', 'ClientesController@search')->name('pesqcli');
    
    //Pets
    Route::get('/listapets', 'PetsController@index')->name('listapets');
    Route::get('/addpet', 'PetsController@create')->name('addpet');
    Route::post('/storepet', 'PetsController@store')->name('storepet');
    Route::put('/updatepet/{id}', 'PetsController@update')->name('updatepet');
    Route::get('/historicopet/{id}', 'PetsController@show')->name('perfilpet');
    Route::get('/listapets/{id}', 'PetsController@destroy')->name('deletapet');
    Route::get('/listapetspesq/search', 'PetsController@search')->name('pesqpet');

    //Servicos
    Route::get('/listaserv', 'ServicosController@index')->name('listaserv');
    Route::get('/detalheserv/{id}', 'ServicosController@show')->name('servdet');
    Route::get('/listaserv', 'ServicosController@index')->name('listaserv');
    Route::get('/listaservpesq/search', 'ServicosController@search')->name('listaservspesq');
    Route::post('/addserv', 'ServicosController@store')->name('addserv');
    Route::get('/listaserv/{id}', 'ServicosController@destroy')->name('deletaserv');
    Route::put('/updateserv/{id}', 'ServicosController@update')->name('updateserv');
    Route::put('/swap1/{id}', 'ServicosController@swap1')->name('swap1');
    Route::put('/swap2/{id}', 'ServicosController@swap2')->name('swap2');
    Route::put('/swap3/{id}', 'ServicosController@swap3')->name('swap3');
    Route::put('/swap4/{id}', 'ServicosController@swap4')->name('swap4');

});
