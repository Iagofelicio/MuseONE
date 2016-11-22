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
/* Rotas admin */ 
Route::get('admin',['as' => 'admin', 'uses' => 'MemberController@indexAdmin']);
Route::get('admin/curadores',['as' => 'aprovarCuradores', 'uses' => 'MemberController@approveCuradores']);

/* Rotas Curadores */ 
Route::get('curador',['as' => 'curador', 'uses' => 'MemberController@indexCurador']);
/* Route::get('idmuseu/eventos',['as' => 'eventosListar', 'uses' => 'MemberController@showEventos']); */
/*Route::get('idmuseu/eventos/criar',['as' => 'eventosCriar', 'uses' => 'MemberController@createEventos']);
Route::get('idmuseu/eventos/editar',['as' => 'eventosEdit', 'uses' => 'MemberController@editEventos']);
Route::post('idmuseu/eventos/salvar',['as' => 'eventosSalvar', 'uses' => 'MemberController@saveEventos']);
Route::post('idmuseu/eventos/atualizar',['as' => 'eventosSalvar', 'uses' => 'MemberController@updateEventos']);*/

/* Rotas Home */
Route::get('/',['as' => 'Welcome', 'uses' => 'HomeController@index']);
/* PENDENTE: Especificar parametros */
Route::post('pesquisa',['as' => 'Pesquisa', 'uses' => 'HomeController@search']);
Route::get('informacoes/{id}',['as' => 'Info', 'uses' => 'HomeController@info']);
//

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
