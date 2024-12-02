<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\blog\BlogController;
use App\Http\Controllers\shop\ShopController;
use App\Http\Controllers\portfolio\PortfolioController;
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
    return view('index');
});

Route::get('/blog',[BlogController::Class, 'index']);
Route::get('/shop',[ShopController::Class, 'index']);
Route::get('/portfolio',[PortfolioController::Class, 'index']);
Route::get('/contact',[HelpController::Class, 'contact']);
Route::get('/about',[HelpController::Class, 'about']);