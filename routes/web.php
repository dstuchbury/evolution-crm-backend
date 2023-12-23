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

Route::middleware('web')->get('api-only', function () {
    return WebResponse::respondUnauthorised('Browser request to backend');
})->name('login');

Route::middleware([
//    'web',
    'auth:sanctum'
])->group( function() {

    Route::get('/', function() {
        return WebResponse::respondOk();
    });

    Route::resource('contacts', \App\Http\Controllers\ContactController::class);
    Route::resource('companies', \App\Http\Controllers\CompanyController::class);

});
