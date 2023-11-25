<?php

use App\Responses\WebResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
//    'web',
    'auth:sanctum'
])->group( function() {

    Route::get('/', function() {
        return WebResponse::respondOk();
    });

});
