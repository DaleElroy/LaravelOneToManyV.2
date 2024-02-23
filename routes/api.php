<?php

use App\Http\Controllers\api\StudentController;
use App\Http\Controllers\api\SubjectController;
use App\Http\Controllers\AuthorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('authors', AuthorController::class);
Route::apiResource('book',BookController::class);
Route::apiResource('student',StudentController::class);
Route::apiResource('subject',SubjectController::class);