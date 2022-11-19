<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

    //Get All Resource
    Route::get('/patients', [PatientsController::class, 'index']);
   
    //Add Resource
    Route::post('/patients', [PatientsController::class, 'store']);
   
    //Get Detail Resource
    Route::get('/patients/{id}', [PatientsController::class, 'show']);
   
    //Edit Resource
    Route::post('/patients{id}', [PatientsController::class, 'update']);

    //Delete Resource
    Route::delete('/patients{id}', [PatientsController::class, 'destroy']);
   
    //Search Resource by name
    Route::get('/patients/status/{name}', [PatientsController::class, 'search']);

    //Get positive Resource
    Route::get('/patients/status/recovered', [PatientsController::class, 'positive']);

    //Get recovered Resource
    Route::get('/patients/status/recovered', [PatientsController::class, 'recovered']);

    //Get Dead Resource
    Route::get('/patients/status/dead', [PatientsController::class, 'dead']);
    


});
