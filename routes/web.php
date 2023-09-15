<?php
use App\Http\Controllers\API\DataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/dashboard');
Route::get('/',[DataController::class,'index']);
Route::get('/realtime',[DataController::class,'index']);
Route::get('/get-kapasitas', [DataController::class,'getKapasitas']);

Route::get('/kapasitassampah',[DataController::class,'getKapasitas']);

Route::get('/test',[DataController::class,'index']);
Route::get('/kapasitassampah',[DataController::class,'showMonitoring']);
Route::get('/kapasitassampah2',[DataController::class,'showMonitoring2']);
Route::get('/dashboard', [DataController::class,'dashboard']);
Route::get('/data', [DataController::class,'data']);
