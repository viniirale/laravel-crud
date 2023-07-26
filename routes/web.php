<?php
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class, 'index'])->name('index');
Route::controller(LoginController::class)->group(function(){
    Route::get('/login-admin', 'index')->name('login-admin.index');
    Route::post('/login-admin', 'store')->name('login-admin.store');
    Route::get('/logout', 'destroy')->name('login-admin.destroy');
});
Auth::routes();
