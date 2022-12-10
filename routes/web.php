<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReqController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DepartmentController;

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

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::resource('/department', DepartmentController::class);
});

require __DIR__ . '/auth.php';
Route::resource('department', DepartmentController::class);
Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('stock', StockController::class);
Route::resource('req', ReqController::class);

// createReq
Route::get('/req/add/{id}', [ReqController::class, 'createReq'])->name('addReq');
Route::post('/req/add/{id}', [ReqController::class, 'storeRestore'])->name('addReqPost');

// /req/id/