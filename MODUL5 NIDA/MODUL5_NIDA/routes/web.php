<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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
    return view('home');
});

Route::view('/order', 'order');
Route::view('/addproduct', 'addproduct');
Route::view('/ordernow', 'ordernow');

//product
Route::get('/product', [ProductController::class, 'index']);
Route::post('/add', [ProductController::class, 'create']);
Route::get('/update/{id}', [ProductController::class, 'updateIndex']);
Route::patch('/update/{id}', [ProductController::class, 'update']);
Route::delete('/delete/{id}', [ProductController::class, 'delete']);

//order
Route::get('/order', [OrderController::class, 'indexOrder']);
Route::get('/ordernow/{id}', [OrderController::class, 'show']);
Route::post('/order', [OrderController::class, 'create']);

//history
Route::view('/history', 'history');
Route::get('/history', [OrderController::class, 'indexHistory']);
