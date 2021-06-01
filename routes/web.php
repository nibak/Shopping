<?php
namespace App\Http\Controllers;
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

Route::resource('products', ProductController::class);
Route::resource('category', CategoryController::class);
Route::get('/viewProduct/{category_id}', 'App\Http\Controllers\CategoryController@viewProduct')->name('viewProduct'); 

// Route::resource('shop', ProductController::class)->only(['index','show','create']);
// Route::resource('shop', ProductController::class)->only(['store','edit','store','update','destroy'])->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
