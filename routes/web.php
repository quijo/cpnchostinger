<?php

use Illuminate\Support\Facades\Route;


Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/academics', function () {
    return view('pages.academics');
});
Route::get('/admissions', function () {
    return view('pages.admissions');
});
Route::get('/announcement', function () {
    return view('pages.announcement');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/news', function () {
    return view('pages.newsevents');
});
Route::get('/otherlinks', function () {
    return view('pages.otherlinks');
});
Route::get('/parentguardians', function () {
    return view('pages.parentguardians');
});
Route::get('/studentlife', function () {
    return view('pages.studentlife');
});
Route::get('/central', function () {
    return view('welcome');
});





