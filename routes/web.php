<?php
use App\Http\Controllers\MainController;
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
Route::get('/', [MainController::class, 'index']);
Route::get('/about-us', [MainController::class, 'about']);
Route::get('/contact-us', [MainController::class, 'contact']);
Route::get('/search-engine-optimization', [MainController::class, 'seo']);
Route::get('/web-design', [MainController::class, 'web']);
Route::get('/digital-marketing', [MainController::class, 'digital']);
Route::get('/e-commerce', [MainController::class, 'ecommerce']);
Route::get('/copywriting', [MainController::class, 'copywriting']);
Route::get('/content-writing', [MainController::class, 'content']);

