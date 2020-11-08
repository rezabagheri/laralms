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

Route::get('/', [FrontEndController::class,'home'])->name('Home');
Route::get('/about', [FrontEndController::class,'about'])->name('About');
Route::get('/contact', [FrontEndController::class,'contact'])->name('Contact');
// Route::get('/', function () {
//     return view('pages.home');
// })->name('Home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('Welcome');
/*
Route::get('/about', function () {
    return view('pages.about');
})->name('About');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('Contact');
*/
Route::get('/blog', function () {
    return view('pages.blog');
})->name('Blog');
