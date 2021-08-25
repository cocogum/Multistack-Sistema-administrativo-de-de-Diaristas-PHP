<?php

use App\Http\Controllers\servicoController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rota para trabalhar com serviço


Route::get('/servicos', [servicoController::class, 'index'])->name('servicos.index');
Route::get('/servicos/create', [servicoController::class, 'create'])->name('servicos.create');
Route::post('/servicos', [servicoController::class, 'store'])->name('servicos.store');
Route::get('/servicos/{servico}/edit', [servicoController::class, 'edit'])->name('servicos.edit');
Route::put('/servicos/{servico}',[servicoController::class, 'update'])->name('servicos.update');


