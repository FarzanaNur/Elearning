<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

//enroll page view
Route::get('/enrolls',[HomeController::class,'enrolls']);
//enroll done
Route::post('/',[HomeController::class,'upload_info']);

// Route::get('/enrolls', function () {
//         return view('user.enrolls');
//     });



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('/add_course_view',[AdminController::class,'addcourse']);

// Route::get('/add_users',[AdminController::class,'add_users']);

Route::get('/course',[HomeController::class,'course']);

Route::get('/about',[HomeController::class,'about']);

Route::get('/Contact',[HomeController::class,'Contact']);

Route::any('/profile',[HomeController::class,'profile']);
