<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CardController;
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
Route::get('/users', [UserController::class, 'index']);

Route::get('/cards', [CardController::class, 'index']);


Route::get('/', function (){
    return response()->json([
        'success' => true
    ]);
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
