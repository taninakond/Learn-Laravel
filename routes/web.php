<?php

use App\Http\Controllers\GreetingController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
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

Route::get('/student', StudentController::class);
Route::resource('photos', PhotoController::class);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return view('greeting');
});

Route::get('/user/{id?}/{name?}', function ($userId = 1, $userName = 'tania') {
    // return 'User id is: ' . $userId . 'userName :' . $userName;
    return view('user.index', [
        'userId'    => $userId,
        'userName'  => $userName,
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/greeting/{title}', [GreetingController::class, 'showMessage']);

Route::resource('/jobs', JobsController::class);
