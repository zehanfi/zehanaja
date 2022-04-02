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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/place/details', [\App\Http\Controllers\WrapperApiController::class, 'details'])->name('details');
Route::get('/place/findplacefromtext', [\App\Http\Controllers\WrapperApiController::class, 'findplacefromtext'])->name('findplacefromtext');
Route::get('/place/nearbysearch', [\App\Http\Controllers\WrapperApiController::class, 'nearbysearch'])->name('nearbysearch');
Route::get('/place/textsearch', [\App\Http\Controllers\WrapperApiController::class, 'textsearch'])
    ->middleware( \App\Http\Middleware\NpmMiddleware::class)
    ->name('textsearch');
Route::get('/place/photo', [\App\Http\Controllers\WrapperApiController::class, 'photo'])->name('photo');
Route::get('/user/identitas', function(){
    return[
        'code' => '0',
        'data' => [
            'npm' => '197006073',
            'nama' => 'Zhehan Gustiyandi',
            'email' => 'zehan@gmail.com',
            'AlamatLengkap' => 'Jl air tanjung no 25, kec kawalu'
        ]
        ];
})->name('identitas');


