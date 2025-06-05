<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalougeController;

use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', [HomeController::class, 'index']);
Route::get('/catalouge', [CatalougeController::class, 'index'])->name('catalouge');
Route::get('/catalouge-details/{id}', [CatalougeController::class, 'catalouge_details'])->name('calalouge.details');
Route::get('/catalouge-details2/{id}', [CatalougeController::class, 'catalouge_details2'])->name('calalouge.details2');

Route::get('/statistics', [HomeController::class, 'statistics'])->name('statistics');


Route::get('/catalouge2', [CatalougeController::class, 'index2'])->name('catalouge2');
Route::get('/graph2', [HomeController::class, 'graph2'])->name('graph2');


Route::get('/decade', [HomeController::class, 'decade'])->name('decade');
Route::get('/author', [HomeController::class, 'author'])->name('author');
Route::get('/state', [HomeController::class, 'state'])->name('state');
Route::get('/zone', [HomeController::class, 'zone'])->name('zone');

Route::post('/getSuggestions', [CatalougeController::class, 'getSuggestions'])->name('getSuggestions');