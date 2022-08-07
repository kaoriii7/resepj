<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserControllser;

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

Route::get('/', [ShopController::class, 'index']);
Route::get('/detail/{id}/', [ShopController::class, 'detail']);
Route::get('/done', [ReservationController::class, 'done']);
Route::post('/done', [ReservationController::class, 'create']);
Route::get('/register', [ShopController::class, 'register']);
Route::post('/thanks', [ShopController::class, 'thanks']);
Route::get('/auth', [UserControllser::class,'check']);
Route::get('/mypage', [UserControllser::class,'checkUser']);
Route::post('/mypage', [UserControllser::class,'checkUser']);
Route::get('/shop', [UserControllser::class, 'getlogout']);
Route::get('/mypage', [UserControllser::class, 'index']);
Route::get('/mypage/delete/', [UserControllser::class, 'delete']);
Route::post('/mypage/delete/', [UserControllser::class, 'delete'])->name('mypage.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

