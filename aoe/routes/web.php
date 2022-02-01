<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CivilizationController;
use App\Models\Civilization;

/* Route::get('/', function() {
    return view('/civilizations');
}); */

Route::get('/', [CivilizationController::class, 'index']);
/* Route::get('/civilizations/{id}', [CivilizationController::class, 'update']);
 *//* Route::get('/civilizations/edit/{id}', [CivilizationController::class, 'edit']); */
Route::post('/civilizations/{id}', [CivilizationController::class, 'update']);
Route::get('/civilizations/create', [CivilizationController::class, 'create']);
Route::post('/civilizations', [CivilizationController::class, 'store']);
Route::get('/civilizations/{id}', [CivilizationController::class, 'show']); 
Route::delete('/civilizations/{id}', [CivilizationController::class, 'destroy']);