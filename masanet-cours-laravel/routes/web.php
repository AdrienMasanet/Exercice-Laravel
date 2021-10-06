<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\AdminController;

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
    return view('index');
});

Route::prefix('articles')->name('articles.')->group(function () {
    Route::get('/', [ArticlesController::class, 'index'])->name('index');
    Route::get('/{id}', [ArticlesController::class, 'show'])->name('show')->whereNumber('id');
});

Route::prefix('authors')->name('authors.')->group(function () {
    Route::get('/', [AuthorsController::class, 'index'])->name('index');
    Route::get('/{slugName}', [AuthorsController::class, 'show'])->name('show');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('index');
    Route::get('/create-article', [AdminController::class, 'createArticle'])->name('create-article');
    Route::post('/create-article', [AdminController::class, 'storeArticle'])->name('post-article');
    Route::get('/list-articles', [AdminController::class, 'listArticles'])->name('list-article');
});

