<?php

use App\Http\Controllers\Api\ExerciseController;
use App\Http\Controllers\Api\WorkoutController;
use Illuminate\Support\Facades\Route;
  
Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/exercises', [ExerciseController::class, 'index']);
 
