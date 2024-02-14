<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('lang/{lang}', [LanguageController::class, 'swtichlanguage'])->name('lang.switch');

// Route::group(['prefix' => 'categories'], function () {
//     Route::resource('post', CategoryController::class);
// });

Route::resource('categories', CategoryController::class);
// Route::post('categories/store',[CategoryController::class,'store']);
