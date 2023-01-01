<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
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

Auth::routes();
Route::get('/', [ArticleController::class, 'index'])->name('home');
Route::get('/articles', function(){ return redirect()->route('home'); });
Route::get('/articles/detail/{aid}', [ArticleController::class, 'detail']);
Route::get('/articles/add', [ArticleController::class, 'add']);
Route::post('/articles/add', [ArticleController::class, 'create']);
Route::get('/articles/delete/{did}', [ArticleController::class, 'delete']);
Route::post('/comment/add', [CommentController::class, 'add']);
Route::get('/comment/delete/{id}', [CommentController::class, 'delete']);