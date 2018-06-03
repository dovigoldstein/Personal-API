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
Route::resource('/skills', 'SkillsController')->only(['index']);

Route::resource('/institutions', 'InstitutionsController')->only(['index','show']);

Route::resource('/positions', 'PositionsController')->only(['index','show']);

Route::resource('/projects', 'ProjectsController')->only(['index','show']);

Route::fallback(function(){
    return response()->json([
        'error' => [
                'status' => '404',
                'source' => [$_SERVER['REQUEST_URI']],
                'detail' => 'Resource Not Found'
            ]
    ], 404);    
})->name('fallback');