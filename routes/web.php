<?php

use App\Http\Controllers\PortfolioController;
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

Route::get('/', [PortfolioController::class, 'testimonial']);

// Masih tidak berfungsi
Route::get('portfolio', [PortfolioController::class, 'index']);
Route::post('portfolio', [PortfolioController::class, 'store']);

Route::get('portfolio', [PortfolioController::class, 'testimonial']);
Route::post('portfolio', [PortfolioController::class, 'storeRate']);