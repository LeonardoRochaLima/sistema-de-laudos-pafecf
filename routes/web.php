<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\CadastroEmpresasController;

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
Route::post('/cadastros', [EmpresaController::class, 'store']);
Route::post('cadastros/{empresa}/update', 'EmpresaController@update')->name('cadastroEmpresa.update');
Route::post('/cadastros/{empresa}/excluirCadastro', 'EmpresaController@excluirCadastro')->name('cadastroEmpresa.excluirCadastro');

//Rotas de Autenticação de usuário
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Rotas do Usuário
Route::resource('profile', 'Auth\UserController');
Route::get('profile.show', 'Auth\UserController@show');
Route::post('/profie/{user}/update', 'Auth\UserController@update')->name('user.update');