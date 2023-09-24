<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\HomeController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/saveAnswerRoute', [AnswerController::class, 'saveAnswer'])->name('saveAnswerRoute');
Route::get('/showResultRoute', [AnswerController::class, 'showResult'])->name('showResultRoute');
Route::get('/showResultRoute/{nim}', [AnswerController::class, 'showResult'])->name('showResultRoute');
Route::get('/activityRoute/{nim}', [ActivityController::class, 'activity'])->name('activity');