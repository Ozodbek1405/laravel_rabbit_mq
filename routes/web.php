<?php

use App\Http\Controllers\Controller;
use App\Services\RabbitMQService;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/message',[Controller::class,'message'])->name('messages');

Route::get('/', function () {
    return view('welcome');
});
