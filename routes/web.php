<?php

use App\Http\Controllers\ComicController;
use App\Models\Comic;
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


Route::get('/manga' , [ComicController::class , "index"])->name("comics.index");
Route::post('/manga' , [ComicController::class , "store"])->name('comics.store');
Route::get('/manga/create' , [ComicController::class , "create"])->name('comics.create');
Route::get('manga/show/{id}', [ComicController::class , "show"])->name('comics.show');
Route::get("/manga/{id}/edit", [ComicController::class, "edit"])->name("comics.edit");
Route::put('manga/{id}' , [ComicController::class , "update"])->name("comics.update");


