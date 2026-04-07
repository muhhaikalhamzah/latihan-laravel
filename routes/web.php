<?php

use App\http\controllers\studentcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',[StudentController ::class,'index']);
Route::get('/student/create',[StudentController ::class,'create']);
