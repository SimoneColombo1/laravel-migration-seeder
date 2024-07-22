<?php
use App\Http\Controllers\Guest\PageController as GuestPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\TrainController as GuestTrainController;
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

Route::get('/',[GuestPageController::class,'index'])->name('guest.home');
Route::get('$',[GuestTrainController::class,'index'])->name('guest.home');