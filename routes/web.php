<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

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
Route::get('/detail', [ShopController::class, 'detail']);
Route::post('/done', [ShopController::class, 'done']);
Route::get('/register', [ShopController::class, 'register']);
Route::post('/thanks', [ShopController::class, 'thanks']);
Route::get('/auth', [ShopController::class,'check']);
Route::post('/mypage', [ShopController::class,'checkUser']);
Route::get('/', [ShopController::class, 'getlogout']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

