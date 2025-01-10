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

Route::get('forest',[ForestControlles::class,'index'])->name('forst.index');
Route::get('forest/{id}',[ForestControlles::class,'show'])->name('show')->where('id','[0-9]+');
Route::get('forest/edit/{id}',[ForestControlles::class,'edit'])->name('edit')->middleware('can:edit-forest') ;
Route::delete('forest/delete/{id}',[ForestControlles::class,'destroy'])->where('id','[0-9]+')->name('destroy')->middleware('can:admin' );
Route::get('forest/create',[ForestControlles::class,'create']) -> name('create')->middleware('can:admin' );
Route::post('forest/store',[ForestControlles::class,'store'])->name('store');
Route::patch('forest/update/{id}',[ForestControlles::class,'update'])->name('update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
