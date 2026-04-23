<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

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
Route::get('/admission-process', fn() => view('pages.admission-process'))->name('admission-process');
Route::get('/more-about-us', fn() => view('pages.learnmore-about-cpnc'))->name('more-about-us');
// Route::get('/downloads', fn() => view('pages.download'))->name('downloads');
Route::get('/downloads', fn()=>view('pages.download'))->name('downloads');


  
    Route::get('/mission', fn () => view('pages.philmicteen.mission'))->name('mission');
    Route::get('/about', fn () => view('pages.philmicteen.about'))->name('about');
    Route::get('/program', fn () => view('pages.philmicteen.program'))->name('program');
    Route::get('/course', fn () => view('pages.philmicteen.course'))->name('course');
    Route::get('/instructor', fn () => view('pages.philmicteen.instructor'))->name('instructor');
    Route::get('/licensing', fn () => view('pages.philmicteen.licensing'))->name('licensing');
    Route::get('/dbm', fn () => view('pages.philmicteen.dbm'))->name('dbm');
    
    
 

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');