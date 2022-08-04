<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserController;

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
Route::get('/done', [ShopController::class, 'add']);
Route::post('/done', [ShopController::class, 'create']);
Route::get('/register', [ShopController::class, 'register']);
Route::post('/thanks', [ShopController::class, 'thanks']);
Route::get('/auth', [ShopController::class,'check']);
Route::get('/mypage', [ShopController::class,'checkUser']);
Route::post('/mypage', [ShopController::class,'checkUser']);
Route::get('/mypage', [UserController::class, 'mypage']);
// アクセス先のリンク（shopのところ）は未確定↓
Route::get('/shop', [ShopController::class, 'getlogout']);

Route::post('/like', [LikeController::class, 'create'])->name('like');
Route::post('/unlike', [LikeController::class, 'delete'])->name('unlike');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

