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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/teste', 'PagesController@teste');
Route::get('/services', 'PagesController@services');
//Route::get('/cadastro_empresas', 'PagesController@cadastro_empresas');

Route::post('/cadastros', [EmpresaController::class, 'store']);
Route::post('cadastros/{empresa}/update', 'EmpresaController@update')->name('cadastroEmpresa.update');
Route::post('/cadastros/{empresa}/excluirCadastro', 'EmpresaController@excluirCadastro')->name('cadastroEmpresa.excluirCadastro');
Route::resource('cadastros', 'EmpresaController');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');