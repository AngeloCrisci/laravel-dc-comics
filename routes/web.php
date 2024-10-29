<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeUnit\FunctionUnit;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name("Homepage");

Route::get('/create' , [ComicController::class , "create"])->name('comics.create');
Route::post('/manga' , [ComicController::class , "store"])->name('comics.store');
Route::get('/manga' , [ComicController::class , "index"])->name("comics.index");
Route::get('/show/{id}', [ComicController::class , "show"])->name('comics.show');

