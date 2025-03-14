<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/todo', [App\Http\Controllers\TodoController::class, 'index'])->name('todo');

Route::get('/user', function () {
    event(new \App\Events\OrderPlaced('Nasi Goreng'));
});


