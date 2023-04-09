<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeTrainers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     return view('index');
// })->name('index');

// Route::resource('/',HomeController::class);

Route::resources([
    '/' => HomeController::class,
]);

Route::group(['namespace' => 'App\Http\Controllers'],function(){
     Route::get('/trainerInfo','TrainerShowController@show')->name('trainerinfo');

      // admin
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/',function(){
            return view('admin.index');
        })->name('admin.index');

        // courses
        Route::resource('/courses', CourseController::class);

        // schedules
        Route::resource('/schedules', ScheduleController::class);

        // Trainers
        Route::resource('/trainers', TrainerController::class);
    });
});

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/about', function () {
    return view('about');
})->name('about');
