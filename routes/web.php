<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForestControlles;

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
Route::get('/sdgs', function () {
    return view('intro_sdgs');
});

Route::get('forest',[ForestControlles::class,'index'])->name('forest.index') ;
Route::get('forest/{id}',[ForestControlles::class,'show'])->name('show') ;
Route::get('forest/edit/{id}',[ForestControlles::class,'edit'])->name('edit') ;
Route::delete('forest/delete/{id}',[ForestControlles::class,'destroy'])->where('id','[0-9]+')->name('destroy');