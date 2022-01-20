<?php

use App\Http\Controllers\admin\AdminCheckout;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\admin\DashboardController as AdminDashboard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\checkoutController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
//socialite routes
Route::get('sign-in-google',[UserController::class,'google'])->name('user.login.google');
Route::get('auth/google/callback',[UserController::class,'handleProviderCallback'])->name('user.google.callback');
//midtrans routes
Route::get('payment/success',[UserController::class,'midtransCallback']);
Route::post('payment/success',[UserController::class,'midtransCallback']);
//Home Routes
Route::middleware(['auth'])->group(function(){
    //checkout routes
    Route::get('/checkout/success',[checkoutController::class,'success'])->name('checkout.success')->middleware('EnsureUserRole:user');
    Route::get('/checkout/{camp:slug}',[checkoutController::class,'create'])->name('checkout.create')->middleware('EnsureUserRole:user');
    Route::post('/checkout/{camp}',[checkoutController::class,'store'])->name('checkout.store')->middleware('EnsureUserRole:user');
    //dashboard
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    //user dashboard
    Route::prefix('/user/dashboard')->namespace('User')->name('user.')->middleware('EnsureUserRole:user')->group(function(){
        Route::get('/',[UserDashboard::class,'index'])->name('dashboard');
    });
    //admin dashboard
    Route::prefix('/admin/dashboard')->namespace('Admin')->name('admin.')->middleware('EnsureUserRole:admin')->group(function(){
        Route::get('/',[AdminDashboard::class,'index'])->name('dashboard');
        Route::post('/admin/{checkout}',[AdminCheckout::class,'update'])->name('checkout.update');
    });
});

require __DIR__.'/auth.php';

// Route::get('/dashboard/checkout/invoice/{checkout}',[checkoutController::class,'invoice'])->name('user.checkout.invoice');