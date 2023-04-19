<?php

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

// Route::get('/courses', function () {
//     return view('courses');
// })->name('courses');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/404', function () {
    return view('404');
})->name('404');


Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::resource('/',HomeController::class);

    Route::get('/courseinfo', 'CourseInfoController@show')->name('courseinfo');

    Route::get('/courses', 'FECourseController@index')->name('courses');

    Route::get('/courseDetails/{id}', 'FECourseController@courseShow')->name('courseDetails');


    // admin
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/',function(){
            return view('admin.index');
        })->name('admin.index');

        // courses
        Route::resource('/courses', CourseController::class);

        // schedules
        Route::resource('/schedules', ScheduleController::class);

        // batches
        Route::resource('/batch', BatchController::class);

        // specialities
        Route::resource('/specialities',SpecialityController::class);

        // trainers
        Route::resource('/trainers',TrainerController::class);

        Route::resource('topics',TopicController::class);
        
        Route::resource('topicLesson',Topic_lesson_Controller::class);
    
    });
});
