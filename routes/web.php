<?php

use App\Http\Controllers\ProjectController;
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

// for Vue routing
//Route::get('/{any}', function () {
//    return view('layouts.vue');
//})->where('any', '.*');

Route::get('/{any}', [ProjectController::class, 'create']);


