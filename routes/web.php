<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', function () {
    return view('home');
})->middleware(\App\Http\Middleware\CheckAge::class)->name('home');


Route::prefix('product')->name('product.')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/add', 'create')->name('add');
        Route::get('/detail/{id?}', 'getDetail')->name('show');
    });
});

Route::prefix('category')->name('category.')->group(function () {
    Route::controller(\App\Http\Controllers\CategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });
});

Route::get('/student/{name?}/{mssv?}', function (
    string $name = 'Pham Thi Thanh Hoa',
    string $mssv = '0022467'
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
        Route::get('/signin', 'SignIn')->name('signin');
        Route::post('/checkSignIn', 'CheckSignIn');
        Route::get('/age', 'age')->name('age');
        Route::post('/storeAge', 'storeAge')->name('storeAge');
    });

});