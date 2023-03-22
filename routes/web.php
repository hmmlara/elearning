<?php

use App\Http\Controllers\CourseController;
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

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

// Route::get('/topics',function(){
//     return view('topics');
// })->name('topics');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::group(['prefix'=>'admin'],function(){
    Route::view('home','admin.index')->name('admin.index');
    Route::resource('courses',CourseController::class);
    Route::resource('topics',TopicController::class);

});
