<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\QualificationController;
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

Route::get('/homepage',[FrontendController::class,'Index']);

Route::get('/admin/dashboard',[BackendController::class,'Index']);


// for About section.....
Route::controller(AboutController::class)->group(function(){


Route::get('/about','index')->name('about.index');

});


// for qualification.....

Route::controller(QualificationController::class)->group(function(){


    Route::get('/education','index')->name('education.index');

    });
