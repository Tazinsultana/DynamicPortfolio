<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\QualificationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// for About section.....
Route::controller(AboutController::class)->group(function () {


    Route::get('/about', 'index')->name('about.index');
    Route::post('/about/add', 'insert')->name('add.about');
    Route::get('/about/add', 'insert')->name('add.about');
});



// for qualification.....

// Route::controller(QualificationController::class)->group(function () {


//     Route::get('/education', 'index')->name('education.index');
//     Route::get('/education/add', 'insert')->name('education.add');
//     Route::post('/education/add', 'insert')->name('education.add');
// });
