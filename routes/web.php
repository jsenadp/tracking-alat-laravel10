<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', [LoginController::class, 'login'])->name('login');

Route::get('/admin',[AdminController::class, 'admin'])->name('admin');
Route::get('/cabcirebon',[AdminController::class, 'cabcirebon'])->name('cabcirebon');
Route::get('/cabbalikpapan',[AdminController::class, 'cabbalikpapan'])->name('cabbalikpapan');
Route::get('/cabsurabaya',[AdminController::class, 'cabsurabaya'])->name('cabsurabaya');
Route::get('/cabpalembang',[AdminController::class, 'cabpalembang'])->name('cabpalembang');
Route::get('/cabjambi',[AdminController::class, 'cabjambi'])->name('cabjambi');

Route::get('/kirimalat',[AdminController::class, 'kirimalat'])->name('kirimalat');

