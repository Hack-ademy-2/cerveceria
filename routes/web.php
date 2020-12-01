<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BreweriesController;

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

Route::get('/', [PageController::class, 'index'] )->name('home');
Route::get('/aboutus', [PageController::class, 'aboutus'] )->name('aboutus');
Route::get('/contacts', [PageController::class, 'contacts'] )->name('contacts');
Route::get('/team', [PageController::class, 'team'] )->name('team');
Route::get('/breweries', [FrontController::class, 'breweries'] )->name('breweries');
Route::post('/breweries/notification', [BreweriesController::class, 'notification'] )->name('breweries.notification');
Route::get('/thankyou', [BreweriesController::class, 'thankyou'] )->name('thankyou');


