<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('mahasiswa', mahasiswaController::class);

Route::get('', function () {
    return view('home');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/tugas', function () {
    return view('tugas');
});
Route::get('/home', function () {
    return view('home');
});