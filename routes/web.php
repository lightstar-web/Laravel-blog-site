<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Route;

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

//GET
Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/1', [PostsController::class, 'show']);

//POST
Route::post('/blog/create', [PostsController::class, 'create']);
Route::post('/blog', [PostsController::class, 'store']);

//PUT OR PATCH
Route::get('/blog/edit/1', [PostsController::class, 'edit']);
Route::patch('/blog/1', [PostsController::class, 'update']);

//DELETE
Route::delete('/blog/1', [PostsController::class, 'destroy']);

//Multiple HTTP verbs
//Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
//Route::any('/blog', [PostsController::class, 'index']);

//Return a view
//Route::view('/blog', 'blog.index', ['name' => 'Abdellatif laghjaj']);

Route::get('/', HomeController::class);
//Route for invoke method
Route::resource('/blog', PostsController::class);
