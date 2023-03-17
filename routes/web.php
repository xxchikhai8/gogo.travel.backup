<?php

use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/history', [MainController::class, 'index']);
Route::post('/sign-up', [MainController::class, 'signup']);
Route::post('/', [MainController::class, 'signin']);
Route::get('/booking-ticket', [TicketController::class, 'index']);
Route::group(['Middleware' => ['auth']], function () {
    Route::get('/sign-out', [MainController::class, 'signout']);
    Route::get('/enterprise', [EnterpriseController::class, 'index']);
    Route::get('/planes', [EnterpriseController::class, 'planelist']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/booking', [TicketController::class, 'booking']);
});
