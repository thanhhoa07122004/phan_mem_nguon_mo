<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::prefix('product')->name('product.')->group(function () {
    Route::get('/', function () {
        return view('product.index', ['products' => [
                [
                    "id" => 1,
                    'name' => "Product A",
                    'quantity' => 100,
                ],
                [
                    "id" => 2,
                    'name' => "Product B",
                    'quantity' => 200,
                ],
                [
                    "id" => 3,
                    'name' => "Product C",
                    'quantity' => 300,
                ],
            ]]);
    })->name('index');

    Route::get('/add', function () {
        return view('product.add');
    })->name('add');

    Route::get('/{id?}', function ($id = '123') {
        return view('product.show', ['id' => $id]);
    })->where('id', '.*')->name('show');
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