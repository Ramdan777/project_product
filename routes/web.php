<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [UserController::class, 'index']);
Route::get('user.index.{id}', [UserController::class, 'show']);
Route::get('user.detail.{id}', [UserController::class, 'show1']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('admin', function () {
    return view('admin.home');
});
Route::get('admin.product.index', [ProductController::class, 'index']);
Route::get('admin.product.detail.{id}', [ProductController::class, 'show']);
Route::get('admin.product.create', [ProductController::class, 'create']);
Route::post('admin-add.product', [ProductController::class, 'store']);
Route::get('admin.product.edit.{id}', [ProductController::class, 'edit']);
Route::put('admin-edit.product.{id}', [ProductController::class, 'update']);
Route::delete('admin-delete.product.{id}', [ProductController::class, 'destroy']);

Route::get('admin.category.index', [CategoryController::class, 'index']);
Route::get('admin.category.detail.{id}', [CategoryController::class, 'show']);
Route::get('admin.category.create', [CategoryController::class, 'create']);
Route::post('admin-add.category', [CategoryController::class, 'store']);
Route::get('admin.category.edit.{id}', [CategoryController::class, 'edit']);
Route::put('admin-edit.category.{id}', [CategoryController::class, 'update']);
Route::delete('admin-delete.category.{id}', [CategoryController::class, 'destroy']);

Route::get('admin.brand.index', [BrandController::class, 'index']);
Route::get('admin.brand.detail.{id}', [BrandController::class, 'show']);
Route::get('admin.brand.create', [BrandController::class, 'create']);
Route::post('admin-add.brand', [BrandController::class, 'store']);
Route::get('admin.brand.edit.{id}', [BrandController::class, 'edit']);
Route::put('admin-edit.brand.{id}', [BrandController::class, 'update']);
Route::delete('admin-delete.brand.{id}', [BrandController::class, 'destroy']);



