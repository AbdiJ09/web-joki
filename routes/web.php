<?php

use App\Models\Service;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\JokiRankController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\JokiRank;
use Spatie\FlareClient\View;

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


Route::get('/', function () {
    return view('home');
});

Route::get('/order/joki-rank', [JokiRankController::class, 'show']);

Route::get('/terms', function () {
    return view('terms');
});

Route::post('/order/joki-rank/payment', [JokiRankController::class, 'payment']);
Route::get('process/orderan/{id_pesanan}', [JokiRankController::class, 'processOrderan'])->name('process.orderan');
Route::post('/proccess/orderan/transaksi/{id_pesanan}', [JokiRankController::class, 'proccessTransaksi']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/register', [LoginController::class, 'store']);
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', function () {


    return view('dashboard.index');
})->name('dashboard')->middleware('auth');



Route::get('/dashboard/orderan', function () {
    return view('dashboard.pageAdmin', [
        'orders' => JokiRank::latest()->get()
    ]);
})->middleware('admin');
