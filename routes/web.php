<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;

// Главная страница
Route::get('/', function () {
    return view('index');
})->name('home');

// Страница формы
Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/reform', function () {
   return view('reform');
})->name('reform');

Route::get('/reform/{id}', [UpdateController::class, 'dataInPlaceholder'])->name('reform');
Route::post('/reform/{id}', [UpdateController::class, 'Update'])->name('update');

Route::get('/messages/submit', [MessageController::class, 'sendId'])->name('messages_1');

Route::get('/messages/submit', [MessageController::class, 'messages'])->name('messages_1');

Route::post('messages/delete/{id}', [DeleteController::class, 'delete'])->name('delete');

Route::get('/form/get', [FormController::class, 'showForm'])->name('form_show');
Route::post('/form/submit', [FormController::class, 'handleForm'])->name('form_submit');
