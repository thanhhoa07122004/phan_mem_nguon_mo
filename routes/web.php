<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('home');
})->name('home');


Route::prefix('product')->name('product.')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/add', 'create')->name('add');
        Route::get('/detail/{id?}', 'getDetail')->name('show');
    });
});

Route::get('/student/{name?}/{mssv?}', function (
    string $name = 'Luong Xuan Hieu',
    string $mssv = '123456'
) {
    return view('student', compact('name', 'mssv'));
})->name('student.show');

Route::get('/banco/{n}', function ($n) {
    return view('banco.banco', ['n' => (int)$n]);
})->name('banco.show');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

Route::prefix('/auth')->group(function () {
     Route::controller(AuthController::class)->group(function () {
        Route::get('/register', 'register')->name('register');
        Route::post('/checkRegister', 'checkRegister');
    });

});