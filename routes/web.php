<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FetchController;
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
    return view('welcome');
});

Route::get('/homepage', [FrontendController::class, 'Index']);

Route::get('/admin/dashboard', [BackendController::class, 'Index']);


// // for About section.....
Route::controller(AboutController::class)->group(function () {


    Route::get('/about', 'index')->name('about.index');
    Route::post('/about/add', 'insert')->name('add.about');
});


// for qualification.....

Route::controller(QualificationController::class)->group(function () {


    Route::get('/education', 'index')->name('education.index');
    // Route::get('/education/add', 'insert')->name('education.add');
    Route::post('/education/add', 'insert')->name('education.add');
});


// For Experience.....

Route::resource('experience', ExperienceController::class);


Route::controller(FetchController::class)->group(function () {
    Route::get('/experiencesection/{id}', 'experiencePage')->name('experiencepage');
});
