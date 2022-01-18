<?php

use App\Http\Controllers\AutomoveisController;
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

Route::get('/', [AutomoveisController::class, 'index'])->name('home');

Route::prefix('automovel')->group(function(){

    Route::get('/inserir', [AutomoveisController::class, 'create'])->name('automoveis.create');
    Route::post('/inserir', [AutomoveisController::class, 'store']);
    Route::get('/{id}', [AutomoveisController::class, 'show'])->name('automoveis.show');

});
