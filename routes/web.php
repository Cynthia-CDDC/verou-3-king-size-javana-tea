<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OverviewController;

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

Route::get('/', [OverviewController::class, 'overviewTeas'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/details/{id}', [OverviewController::class, 'detailsTea'])->name('details');

require __DIR__ . '/auth.php';
