<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

Route::prefix('produto')->group(function(){
    
    // RETRIEVE (INDEX)
    Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');

    // CREATE
    Route::get('/create', [ProdutoController::class, 'create'])->name('produto.create');
    Route::post('/', [ProdutoController::class, 'store'])->name('produto.store');

    //EDIT
    Route::get('/edit/{id}', [ProdutoController::class, 'edit'])
        ->where('id', '[0-9]+')->name('produto.edit');
    Route::put('/{id}', [ProdutoController::class, 'update'])
        ->where('id', '[0-9]+')->name('produto.update');
});
