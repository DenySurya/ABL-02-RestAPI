<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController;
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
});
Route::get('/Masyarakats', [MasyarakatController::class, 'getDataMasyarakat']);
Route::get('/Masyarakats/{id}', [MasyarakatController::class, 'getDataMasyarakatId']);
Route::post('/Masyarakats', [MasyarakatController::class, 'postDataMasyarakat']);
Route::post('/Masyarakats/{id}', [MasyarakatController::class, 'updateDataMasyarakat']);
Route::delete('/Masyarakats/{id}', [MasyarakatController::class, 'hapusDataMasyarakat']);
Route::get('/Masyarakats/search/{nama}', [MasyarakatController::class, 'searchDataMasyarakat']);