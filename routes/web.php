<?php

use App\Http\Controllers\PageController;
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

Route::get('/',[PageController::class,'getSlide'])->name('page.home');
Route::get('/productType/{type}',[PageController::class,'getProductType'])->name('page.productType');
Route::get('/productDetail/{id}',[PageController::class,'getDetail'])->name('page.detail');
Route::get('/login',[PageController::class,'getLogin'])->name('page.login');
Route::post('/login',[PageController::class,'postLogin'])->name('page.postLogin');
Route::get('/rigister',[PageController::class,'getRigister'])->name('page.rigister');
Route::post('/rigister',[PageController::class,'postRigister'])->name('page.postRigister');

Route::get('/logout',[PageController::class,'logOut'])->name('page.logOut');




