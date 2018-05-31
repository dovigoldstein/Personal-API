<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::middleware('getOnly')->group(function () {
    Route::resource('/skills', 'SkillsController');

    Route::resource('/institutions', 'InstitutionsController');

    Route::resource('/positions', 'PositionsController');

    Route::resource('/projects', 'ProjectsController');
// });

// Route::fallback(function(){
//     return response()->json([
//         'error' => [
//                 'status' => '404',
//                 'source' => ['pointer'],
//                 'detail' => 'detail'
//             ]
//     ], 404);    
// });