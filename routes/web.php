<?php

use App\Http\Controllers\UserAvatarController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/avatar', [UserAvatarController::class, 'store']);


//Route::patch('/avatar/{id}', [UserAvatarController::class, 'update']);
