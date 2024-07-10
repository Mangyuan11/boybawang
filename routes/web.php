<?php

use app\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/about-you', function () {
    return view('about-you');
});

Route::get('/contact-you', function () {
    return view('contact-you');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('users',[UserController::class,'index']);
Route::get('users/create',[UserController::class,'create']);
Route::post('users',[UserController::class, 'store']);
Route::get('users/{id}',[UserController::class, 'show']);
Route::get('users/{id}/edit', [UserController::class, 'edit']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'delete']);

