<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/user', [UserController::class, 'index']); //http://127.0.0.1:8000/api/user?page=1
Route::get('/user/{user}', [UserController::class, 'show']);  //http://127.0.0.1:8000/api/user/1 enviando o id
Route::post('/user', [UserController::class, 'store']);  //http://127.0.0.1:8000/api/user
