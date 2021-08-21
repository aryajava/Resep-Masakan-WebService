<?php

use App\Http\Controllers\RecipeApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/recipes', [RecipeApiController::class, 'index']);
Route::post('/recipes', [RecipeApiController::class, 'store']);
Route::get('/recipes/{id}', [RecipeApiController::class, 'show']);
Route::put('/recipes/{id}', [RecipeApiController::class, 'update']);
Route::delete('/recipes/{id}', [RecipeApiController::class, 'destroy']);
