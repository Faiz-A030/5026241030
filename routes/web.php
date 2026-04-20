<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('dosen',  [DosenController::class, 'fix']);
Route::get('biodata',  [DosenController::class, 'biodata']);
