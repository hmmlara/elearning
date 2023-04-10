<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontCourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Topic_lesson_Controller;
use App\Http\Controllers\TopicAddMoreController;
use App\Http\Controllers\TopicController;
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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::resource('/',HomeController::class);



Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/about', function () {
    return view('about');
})->name('about');

//Route::get('/courses', function () {
//    return view('courses');
//})->name('courses');


//Route::resource('courses', FrontCourseController::class);

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/courses', 'FECourseController@index')->name('courses');
    Route::get('/courseDetails/{id}', 'FETopicController@index')->name('courseDetails');
});

//Route::group(['prefix'=>'/'],function (){
//    Route::view('home','index');
//});

Route::group(['prefix'=>'admin'],function (){
    Route::view('/','admin.index')->name('admin.index');
    Route::resource('courses',CourseController::class);
    Route::resource('topics',TopicController::class);
    Route::resource('topicLesson',Topic_lesson_Controller::class);
//    Route::get('addmore','TopicAddMoreController@addMore');
//    Route::post("addmore","TopicAddMoreController@addMorePost")->name('addmorePost');


});

