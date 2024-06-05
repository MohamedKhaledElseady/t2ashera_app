<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\SaveController;
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


    Route::get('/form', [DataController::class , 'showForm'])->name('data.show');

Route::post('saveData' , [DataController::class , 'store'])->name('saveData');

Route::get('/all-data' , [DataController::class , 'index'])->name('data.index');

Route::get('showDetails/{data}' , [DataController::class , 'showDetails'])->name('data.show');

Route::put('accept/{data}' , [DataController::class , 'acceptRequest'])->name('data.acceptRequest');

Route::get('reject/{data}' , [DataController::class , 'rejectRequest'])->name('data.rejectRequest');
