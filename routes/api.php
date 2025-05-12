<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskController;

// Routes API REST
Route::apiResource('tasks', TaskController::class);
