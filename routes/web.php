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

Route::get('forest', [ForestController::class,'index']);
