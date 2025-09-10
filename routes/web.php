<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
//hizi hapa route za login
route::get('login',[AuthController::class,'showLogin'])->name('login');
route::post('/login',[AuthController::class,'Login'])->name('check');
//hizi hapa route za register
route::get('register',[RegistrationController::class,'showRegister'])->name('register');
route::post('/register',[RegistrationController::class,'Register'])->name('store');

//hizi hapa route za dashboard
Route::middleware('auth')->prefix()->group(function(){

    route::get('Dashboard',[DashboardController::class,'dashboard'])->name('DASHBOARD');
});
