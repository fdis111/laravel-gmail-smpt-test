<?php

use App\Http\Controllers\NewslettersController;
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

Route::get('/', [NewslettersController::class, "index"])->name("newsletters");
Route::post('/', [NewslettersController::class, "store"])->name("store-newsletters");

