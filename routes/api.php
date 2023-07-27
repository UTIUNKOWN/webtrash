<?php
use App\Http\Controllers\API\DataController;
use App\Http\Controllers\API\CloudController;
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

Route::get('monitoring',[DataController::class,'getEdge']);
Route::post('monitoring',[DataController::class,'getEdge']);
// Route::get('monitoring',[DataController::class,'getEdge']);
// Route::post('monitoring',[DataController::class,'cloud']);
// Route::get('monitoring',[DataController::class,'cloud']);
Route::get('test',[DataController::class,'test']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
