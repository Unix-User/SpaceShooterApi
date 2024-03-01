<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScoreController; // Importing the ScoreController
use App\Models\Score;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $scores = Score::paginate(8);
    return view('welcome', compact('scores'));
});

// Using the imported ScoreController for route definitions
Route::get('/scores', [ScoreController::class, 'index']);
Route::post('/scores', [ScoreController::class, 'store']);
Route::get('/scores/{id}', [ScoreController::class, 'show']);
Route::put('/scores/{id}', [ScoreController::class, 'update']);
Route::delete('/scores/{id}', [ScoreController::class, 'destroy']);
