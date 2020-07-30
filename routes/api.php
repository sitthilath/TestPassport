<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::apiResource('user','User\UserController');

Route::apiResource('area','Area\AreaController')->middleware('client.credentialts');

Route::apiResource('department','Department\DepartmentController')->middleware('client.credentialts');

Route::apiResource('institution','Institution\InstitutionController')->middleware('client.credentialts');

Route::apiResource('levelemployee','LevelEmployee\LevelEmployeeController')->middleware('client.credentialts');

Route::apiResource('position','Position\PositionController')->middleware('client.credentialts');

Route::apiResource('stationed','Stationed\StationedController')->middleware('client.credentialts');

Route::apiResource('province','Prov_Dist_Village\ProvinceController')->middleware('client.credentialts');

Route::apiResource('district','Prov_Dist_Village\DistrictController')->middleware('client.credentialts');

Route::apiResource('village','Prov_Dist_Village\VillageController')->middleware('client.credentialts');

