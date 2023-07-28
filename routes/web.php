<?php
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class, 'index'])->name('index');

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin', 'index')->name('admin.index');
    Route::post('/adicionar-produto', 'adicionarProduto')->name('adicionar.produto');
    Route::post('/editar-produto/{id}', 'editarProduto')->name('editar.produto');
    Route::delete('/excluir-produto/{id}', 'excluirProduto')->name('excluir.produto');
    Route::post('/adicionar-categoria', 'adicionarCategoria')->name('adicionar.categoria');
    Route::post('/editar-categoria/{id}', 'editarCategoria')->name('editar.categoria');
    Route::delete('/excluir-categoria/{id}', 'excluirCategoria')->name('excluir.categoria');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login-admin', 'index')->name('login-admin.index');
    Route::post('/login-admin', 'store')->name('login-admin.store');
    Route::get('/logout', 'destroy')->name('login-admin.destroy');
});
Auth::routes();


