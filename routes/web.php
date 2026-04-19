<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/visionmission', function () {
    return view('pages.visionmission');
});

Route::get('/history', fn() => view('pages.history'))->name('history');
Route::get('/message', fn() => view('pages.message'))->name('message');
Route::get('/admissions', fn() => view('pages.admissions'))->name('admissions');
Route::get('/academics', fn() => view('pages.academics'))->name('academic');