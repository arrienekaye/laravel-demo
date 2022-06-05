<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;

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


//Route that sends back a view
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

//Laravel 8
//Route to products
Route::get('/products', [ProductsController::class, 'index'])->name('products');
// Route::get('/products', 'App\Http\Controllers\ProductsController@index')->name('products');
Route::get('/products/about', [ProductsController::class, 'about']);
Route::get('products/list', [ProductsController::class, 'list']);
Route::get('/products/{name}', [ProductsController::class, 'show'])->where('name', '[a-zA-z]+');
Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where(
    [
        'name' => '[a-zA-Z]+',
        'id' => '[0-9]+'
    ]
);
// Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');


//Route to users - sends a string
Route::get('/users', function () {
    return 'Welcome to the users page';
});

//Rouse to users - sends an array(json)
Route::get('/users', function () {
    return ['PHP', 'HTML', 'Laravel'];
});

//Route to users - sends a json object
Route::get('/users', function () {
    return response()->json([
        'name' => 'Kaye',
        'course' => 'Laravel - Beginner to Advanced Topics'
    ]);
});

//Route to users - sends a function
Route::get('/users', function () {
    return redirect('/');
});
