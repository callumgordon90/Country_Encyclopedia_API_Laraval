<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


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

//ENDPOINTS FOR MY PROJECT: 

    //Get all countries:
    Route::get('countries/', [CountryController::class, 'index']);

    //Get one country by it's ID:
    Route::get('countries/{id}', [CountryController::class, 'show']);

    //Create a new country:
    Route::post('countries/', [CountryController::class, 'create']);

    //Update a country by it's ID:
    Route::put('countries/{id}', [CountryController::class, 'update']);
    
    //Delete a country:
    Route::delete('countries/{id}', [CountryController::class, 'delete']);

    //search or filter countries by various criteria:
    Route::get('country/search', [CountryController::class, 'search']);

    /*
    Route::get('search', function () {
        //var_dump('Reached search-countries endpoint'); // Add this line to check if the route is reached
        // Route::get('countries/search', [CountryController::class, 'search']); // Remove this line
    });
    */

    //Register a user
    Route::post('/users/register', [UserController::class, 'register']);

    //Log in a user
    Route::post('/users/login', [UserController::class, 'login']);

    //Reset a password for a user
    Route::post('/auth/create-password-reset-token', [AuthController::class, 'createPasswordResetToken']);
