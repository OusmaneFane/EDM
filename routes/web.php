<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DebiteurController;
use App\Http\Controllers\DashboardController;

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

Route::get('/login', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('accueil');
});

Route::post('/check', [LoginController::class, 'check']);

Route::get('/dahboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/pays', [DashboardController::class, 'pays'])->name('pays');
Route::post('/store_pays', [DashboardController::class, 'store_pays'])->name('store_pays');
Route::get('/cercle', [DashboardController::class, 'cercle'])->name('cercle');
Route::post('/store_cercle',[DashboardController::class, 'store_cercle'])->name('store_cercle');
Route::get('/region', [DashboardController::class, 'region'])->name('region');
Route::post('/store_region',[DashboardController::class, 'store_region'])->name('store_region');
Route::get('/village', [DashboardController::class, 'village'])->name('village');
Route::post('/store_village',[DashboardController::class, 'store_village'])->name('store_village');

Route::get('/add_debiteur', [DebiteurController::class, 'add_debiteur'])->name('add_debiteur');
Route::get('/edit_debiteur', [DebiteurController::class, 'edit_debiteur'])->name('edit_debiteur');
Route::post('/store_debiteur', [DebiteurController::class, 'store_debiteur'])->name('store_debiteur');
Route::get('/debiteur/edit/{id}', [DebiteurController::class, 'edit'])->name('debs.edit');
Route::put('/debiteur/{id}', [DebiteurController::class, 'update'])->name('debs.update');
Route::delete('/debiteur/delete/{id}',[DebiteurController::class, 'delete'])->name('debs.destroy');