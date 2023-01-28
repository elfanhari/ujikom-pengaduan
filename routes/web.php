<?php

use App\Http\Controllers\AuthController;
use App\Models\Tanggapan;
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
})->name('home');

Route::get('/cek', function () {
    return view('cek', [
        'tanggapan' => Tanggapan::all()
    ]);
})->name('cek');

Route::view('/login', 'login')->name('login.page');
Route::view('/page', 'page')->name('page')->middleware('auth');

Route::post('login', [AuthController::class, 'login'])->name('login.check');
Route::post('logout', [AuthController::class, 'logout'])->name('logout.check');