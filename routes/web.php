<?php

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


Route::get('/', function () {
    return view('home', ['state' => false]);
});

Route::get('/home', function () {
    return view('home', ['state' => false]);
});

Route::get('/login', function () {
    return view('home', ['state' => true]);
});

Route::get('/logout', function () {
    return view('home', ['state' => false]);
});

Route::get('/pembayaran', function () {
    return view('pembayaran', ['state' => true]);
});

Route::get('/berkas', function () {
    return view('input_data_diri', ['state' => true]);
});

Route::get('/berkas_ortu1', function () {
    return view('input_data_ayah', ['state' => true]);
});

Route::get('/berkas_ortu2', function () {
    return view('input_data_ibu', ['state' => true]);
});

Route::get('/berkas_ortu3', function () {
    return view('input_data_wali', ['state' => true]);
});

Route::get('/success', function () {
    return view('success_page', ['state' => true]);
});


Route::get('/jurusan', function () {
    return view('jurusan', ['state' => false]);
});
