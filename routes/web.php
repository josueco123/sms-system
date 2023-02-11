<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\BlackListController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/clientlist', function () {
    return view('clientList');
})->middleware(['auth', 'verified'])->name('clientlist');

Route::get('/sendsms', function () {
    return view('sendsms');
})->middleware(['auth', 'verified'])->name('sendsms');


Route::post('/listsms', [SmsController::class, 'getDataImport']
)->middleware(['auth', 'verified'])->name('listsms');

Route::get('/clientform', function () {
    return view('clientForm');
})->middleware(['auth', 'verified'])->name('clientform');

Route::post('/clientform', [BlackListController::class, 'store']
)->middleware(['auth', 'verified'])->name('clientformp');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
