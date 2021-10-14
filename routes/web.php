<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\PropertyGroupController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

// Route::group(['auth:sanctum', 'verified'],  function () {

//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     });

// });

    // clients
    Route::get('clients/download/reciept/{client}', [ClientController::class, 'downloadReciept'])->name('clients.downloadReciept');
    Route::resource('clients', ClientController::class);

    // payments
    Route::get('transactions/{client?}', [TransactionController::class, 'index'])->name('transactions.index');
    Route::get('transactions/create/{client}', [TransactionController::class, 'create'])->name('transactions.create');
    Route::post('transactions', [TransactionController::class, 'store'])->name('transactions.store');

    // estates
    Route::resource('estates', EstateController::class);

    // property-groups
    Route::resource('property-groups', PropertyGroupController::class);
