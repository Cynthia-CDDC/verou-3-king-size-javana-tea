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

Route::get('/mycollection', [OverviewController::class, 'showMyCollection'])->name('mycollection');
Route::get('/save-to-collection/{id}/{collection_id}', [OverviewController::class, 'saveCollectionType'])->name('saveCollectionType');
Route::get('/delete-from-collection/{id}', [OverviewController::class, 'deleteFromCollection'])->name('deleteFromCollection');

require __DIR__ . '/auth.php';
