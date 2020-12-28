<?php

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

Route::get('/', 'App\Http\Controllers\hotFeets@index');
Route::get('/footwear/{id}', 'App\Http\Controllers\hotFeets@show');
Route::get('/allShoes', 'App\Http\Controllers\hotFeets@all');
Route::get('/jordan', 'App\Http\Controllers\hotFeets@jordan');
Route::get('/jordan/{id}', 'App\Http\Controllers\hotFeets@jordanshow');
Route::get('/nike', 'App\Http\Controllers\hotFeets@nike');
Route::get('/nike/{id}', 'App\Http\Controllers\hotFeets@nikeshow');
Route::get('/adidas', 'App\Http\Controllers\hotFeets@adidas');
Route::get('/adidas/{id}', 'App\Http\Controllers\hotFeets@adidasshow');
Route::get('/puma', 'App\Http\Controllers\hotFeets@puma');
Route::get('/puma/{id}', 'App\Http\Controllers\hotFeets@pumashow');
Route::get('/new-arrivals', 'App\Http\Controllers\hotFeets@new');
Route::get('/new-arrivals/{id}', 'App\Http\Controllers\hotFeets@newshow');
Route::get('/apparel', 'App\Http\Controllers\hotFeets@apparel');
Route::get('/apparel/{id}', 'App\Http\Controllers\hotFeets@apparelshow');
Route::get('/shopping-cart', 'App\Http\Controllers\hotFeets@shoppingcart');
Route::get('/extras', 'App\Http\Controllers\hotFeets@extras');
Route::get('/extras/{id}', 'App\Http\Controllers\hotFeets@extrasshow');


// Add to cart Route

Route::Post('/add-to-cart', 'App\Http\Controllers\hotFeets@addtocart');