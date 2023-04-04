<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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
Route::get('/about',function(){
    return view('about');
})->name('about');
Route::get('/courses',function(){
    return view('courses');
})->name('courses');
// Route::get('/login',function(){
//     return view('login');
// })->name('login');
// Route::get('/register',function(){
//     return view('register');
// })->name('register');
Route::group(['namespace' => 'App\Http\Controllers'],function(){
    Route::group(['middleware' => ['guest']], function(){
        //register route
        Route::get('/register','RegisterController@show')->name('register');
        Route::post('/register','RegisterController@register')->name('register.registeration');
        Route::get('/login','LoginController@show')->name('login');
        Route::post('/login','LoginController@login')->name('login.User');
    });
    Route::group(['middleware' => ['auth']], function(){
        Route::get('/logout','LogoutController@logout')->name('logout');
    });
});
Route::group(['prefix'=>'admin'],function(){
    Route::view('home','admin.index')->name('admin.index');
    Route::resource('courses',CourseController::class);
    Route::resource('categories',CategoryController::class);
});
