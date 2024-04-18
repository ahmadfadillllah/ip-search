<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UnitController;
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
    return redirect()->route('dashboard.index');
});

Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/unit/index', [UnitController::class, 'index'])->name('unit.index');
Route::get('/unit/search', [UnitController::class, 'search'])->name('unit.search');

// Route::group(['middleware' => ['auth', 'checkRole:owner,dapur,kasir,meja']], function(){

// });
