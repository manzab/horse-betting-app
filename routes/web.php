<?php

use App\Http\Controllers\HorseController;
use App\Http\Controllers\BetterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


// Route::get('/', function () {
//     return view('horses.horses');
// });

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('horses', HorseController::class);
    Route::resource('betters', BetterController::class);
});
