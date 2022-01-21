<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HotelController;

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


/* 
|
| I'm grouping the API routes because all the endpoints will be 
| feeding off the same controller and this reduces repitition of controller names.
| It's also cleaner this way, I'd say.
*/
Route::controller(HotelController::class)->prefix('hotels')->group(function () {
    Route::get('/{id}', 'show')->name('hotel.show');
});
