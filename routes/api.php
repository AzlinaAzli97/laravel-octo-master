<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TimeslotController;
use App\Http\Controllers\Specific_Movie_TheaterController;
use App\Http\Controllers\Search_PerformerController;
use App\Http\Controllers\Give_RatingController;
use App\Http\Controllers\MovieController;
use Illuminate\Database\QueryException;

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

// Route::group(array('middleware' => ['custom_auth']), function ()
// {
//     // Route::apiResource('token', TokenController::class);
//     // Route::post('/token/topup', [TokenController::class, 'store']);
    
// });

Route::get('/movie', 'App\Http\Controllers\GenreController@show');
Route::get('/timeslot', 'App\Http\Controllers\TimeSlotController@show');
Route::get('/specific', 'App\Http\Controllers\Specific_Movie_TheaterController@show');
Route::get('/search_performer', 'App\Http\Controllers\Search_PerformerController@searchperformer');
Route::post('/give_rating', 'App\Http\Controllers\Give_RatingController@create');
Route::get('/new_movie', 'App\Http\Controllers\MovieController@show');
Route::post('/add_movie', 'App\Http\Controllers\MovieController@addmovie');