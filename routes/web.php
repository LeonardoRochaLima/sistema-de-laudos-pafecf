<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PDVController;


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

//Rotas de Páginas comuns
Route::get('/', 'PagesController@welcome');
Route::get('/about', 'PagesController@about');
Route::get('/teste', 'PagesController@teste');
Route::get('/services', 'PagesController@services');

//Rotas da Empresa
Route::resource('cadastros', 'EmpresaController');
Route::post('/cadastros/create', 'EmpresaController@store');
Route::post('cadastros/{empresa}/update', 'EmpresaController@update')->name('cadastroEmpresa.update');
Route::post('/cadastros/{empresa}/excluirCadastro', 'EmpresaController@excluirCadastro')->name('cadastroEmpresa.excluirCadastro');

//Rotas de PDV
Route::resource('cadastros/PDV', 'PDVController');
Route::get('/cadastros/{empresa}/PDV', 'PDVController@create')->name('cadastroPDV.create');
Route::get('/cadastros/{empresa}/PDV/{pdv}', 'PDVController@show');
Route::post('/cadastros/PDV/{pdv}/update', 'PDVController@update')->name('cadastroPDV.update');
Route::post('/cadastros/{empresa}/PDV/create', 'PDVController@store')->name('cadastroPDV.store');
Route::post('/cadastros/PDV/{pdv}/destroy', 'PDVController@destroy')->name('pdv.destroy');

//Rotas de Autenticação de usuário
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Rotas do Usuário
Route::resource('profile', 'Auth\UserController');
Route::get('profile.show', 'Auth\UserController@show');
Route::post('/profie/{user}/update', 'Auth\UserController@update')->name('user.update');
Route::post('/profie/{user}/perfil', 'Auth\UserController@perfil')->name('user.perfil');

//Rotas Laudo
Route::resource('laudo', 'LaudoController');
Route::post('/cadastros/laudo/create', 'LaudoController@store');
Route::post('/cadastros/laudo/{laudo}/update', 'LaudoController@update')->name('cadastroLaudo.update');
Route::get('/getPDVs', 'LaudoController@getPDVs');
Route::get('/getObject', 'LaudoController@getObject');