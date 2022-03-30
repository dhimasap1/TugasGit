<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RumahSakitController;
use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
});
// Route::get('/', 'LoginController@index');
// Route::post('/', 'LoginController@auth');
// Route::get('/', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
// Route::get('/login', [LoginController::class, 'index']);
// Route::post('/login', [LoginController::class, 'authenticate']);


// Route::get('/', 'App\Http\Controllers\AuthController@index')->name('login');
// Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
// // Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
// Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
// Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

// Route::group(['middleware' => ['auth']], function () {
//     Route::group(['middleware' => ['cek_login:admin']], function () {
//         Route::resource('admin', AdminController::class);
//     });
//     Route::group(['middleware' => ['cek_login:pemilik']], function () {
//         Route::resource('pemilik', AdminController::class);
//     });
// });
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionLogin'])->name('actionlogin');
Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');



Route::prefix('rumahsakit')->group(function () {
    Route::get('/', [RumahSakitController::class, 'index'])->name('rumahsakit.index');
    Route::get('/add', [RumahSakitController::class, 'addIndex'])->name('rumahsakit.add.index');
    Route::post('/add', [RumahSakitController::class, 'add'])->name('rumahsakit.add');
    Route::get('/update/{id}', [RumahSakitController::class, 'updateIndex'])->name('rumahsakit.update');
    Route::post('/update/{id}', [RumahSakitController::class, 'update'])->name('rumahsakit.update');
    Route::post('/delete', [RumahSakitController::class, 'delete'])->name('rumahsakit.delete');
});

Route::prefix('pasien')->group(function () {
    Route::get('/', [PasienController::class, 'index'])->name('pasien.index');
    Route::get('/add', [PasienController::class, 'addIndex'])->name('pasien.add.index');
    Route::post('/add', [PasienController::class, 'add'])->name('pasien.add');
    Route::get('/update/{id}', [PasienController::class, 'updateIndex'])->name('pasien.update');
    Route::post('/update/{id}', [PasienController::class, 'update'])->name('pasien.update');
    Route::post('/delete', [PasienController::class, 'delete'])->name('pasien.delete');
});
