<?php

use Illuminate\Support\Facades\Route;

 
 Route::get('/exercises', [ExerciseController::class, 'index']);

 
 Route::get('/test', function () {
    return 'It works!';
});
