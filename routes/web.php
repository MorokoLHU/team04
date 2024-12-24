<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForestController;

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
    return view('Forest_Main');
});
Route::get('/sdgs', function () {
    return view('intro_sdgs');
});

Route::get('/forest', [ForestController::class,'index']);


Route::get('/forest/{id}', [ForestController::class, 'show'])->where('id', '[0-9]+')->name('Forest.show');
    // 修改表單
Route::get('/forest/{id}/edit', [ForestController::class, 'edit'])->where('id', '[0-9]+')->name('Forest.edit');
Route::delete('/forest/delete/{id}', [ForestController::class, 'destroy'])->where('id', '[0-9]+')->name('Forest.destroy');

Route::patch('forest/update/{id}', [ForestController::class, 'update'])->name('forest.update');

Route::get('/forest/create', [ForestController::class, 'create'])->name('Forest.create');

Route::post('forest/store', [ForestController::class, 'store'])->name('Forest.store');

Route::get('forest/{id}/edit', [ForestController::class, 'edit'])->where('id', '[0-9]+')->name('Forest.edit');