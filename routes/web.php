<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\InicioSesionController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\AppointmentController;

Route::resource('appointments', AppointmentController::class)->middleware('auth');

Route::get('/login', [InicioSesionController::class, 'showLoginForm'])->name('login');
Route::post('/login', [InicioSesionController::class, 'login']);
Route::post('/logout', [InicioSesionController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])
    ->name('register');


Route::post('/register', [RegisterController::class, 'register']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');



Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');


Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');



Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');