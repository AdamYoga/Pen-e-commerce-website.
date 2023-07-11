<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PengendaliCompanyProfile;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// LOGIN
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');



route::get('/companyprofile', [PengendaliCompanyProfile::class, 'halamanutama'])->middleware('auth');

route::get('/produk', [PengendaliCompanyProfile::class, 'produk'])->middleware('auth');

route::post('/pesan', [PengendaliCompanyProfile::class, 'pesan']) -> name('pesan');

Route::resource('/kirimform', \App\Http\Controllers\PengendaliCompanyProfile::class);

Route::resource('/untuk_subscribes', \App\Http\Controllers\KirimSubscriber::class);

Route::resource('/posts', \App\Http\Controllers\PostController::class);


//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
