<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SizeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Category Route
Route::middleware(['auth:sanctum'])->group(function(){
    //Category Route
    Route::resource('categories',CategoryController::class);

    Route::get('categories/{id}/delete',[CategoryController::class,'destroy']);
    Route::get('/api/categories',[CategoryController::class,'getCategoriesJson']);
    //Brand Route
Route::resource('brands',BrandController::class);
Route::get('/api/brands',[BrandController::class,'getBrandsJson']);
Route::get('brands/{id}/delete',[BrandController::class,'destroy']);

//Size Route
Route::resource('sizes',SizeController::class);
Route::get('/api/sizes',[SizeController::class,'getSizesJson']);

Route::get('sizes/{id}/delete',[SizeController::class,'destroy']);

//Product Route
Route::resource('products',ProductsController::class);
Route::get('products/{id}/delete',[ProductsController::class,'destroy']);

});

Route::view('/{any}', 'dashboard')
    ->middleware(['auth'])
    ->where('any', '.*');
