<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\AdminController@index');

// admin login logout
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard', 'App\Http\Controllers\AdminController@showDashboard');
Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');

//Category Product
Route::get('/add-category-product', 'App\Http\Controllers\CategoryProduct@addCategoryProduct');
Route::get('/all-category-product', 'App\Http\Controllers\CategoryProduct@allCategoryProduct');
Route::get('/update-category-product/{productId}', 'App\Http\Controllers\CategoryProduct@updateCategoryProduct');
Route::get('/delete-category-product/{productId}', 'App\Http\Controllers\CategoryProduct@deleteCategoryProduct');

Route::post('/save-category-product', 'App\Http\Controllers\CategoryProduct@saveCategoryProduct');
Route::post('/update-category-product/{productId}', 'App\Http\Controllers\CategoryProduct@saveUpdateCategoryProduct');