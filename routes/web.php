<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
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
Route::get("/{page}", [FrontEndController::class, 'page']);
Route::get('/', [FrontEndController::class,'home'])->name('Home');


Route::get('/welcome', function () {
    return view('welcome');
})->name('Welcome');

