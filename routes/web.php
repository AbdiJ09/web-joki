<?php

use App\Http\Controllers\DashboardController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\JokiRankController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServiceClassicController;
use App\Http\Controllers\UserController;
use App\Models\JokiRank;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
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
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('service.show');
Route::get('/terms', function () {
    return view('terms');
});

Route::post('/order/joki-rank/payment', [JokiRankController::class, 'payment']);
Route::get('process/orderan/{id_pesanan}', [JokiRankController::class, 'processOrderan'])->name('process.orderan');
Route::post('/proccess/orderan/transaksi/{id_pesanan}', [JokiRankController::class, 'proccessTransaksi']);

// route classic
Route::post('order/joki-classic/payment', [ServiceClassicController::class, 'payment'])->name('order.joki-classic.payment');
// end route classic

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/register', [LoginController::class, 'store']);
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', function () {
    return view('dashboard1.index');
});
Route::resource('/admin', DashboardController::class)->middleware('admin');
Route::get('/filterData', [DashboardController::class, 'filterData']);
Route::get('/checkout', [PaymentController::class, 'checkout']);
Route::post('/checkout/process', [PaymentController::class, 'processPayment']);

// route detail_invoice
Route::get('/detail-invoice', function () {
    return view('service.rank.detail_invoice');
})->name('detail.invoice');
