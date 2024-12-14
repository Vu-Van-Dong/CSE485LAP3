<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class); // Đăng ký tất cả các route resource cho tasks


Route::get('/', function () {
    return view('welcome');
});
