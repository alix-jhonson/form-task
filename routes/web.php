<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('form-task', [FormController::class, 'list'])->name('form-task');
Route::post('form-task', [FormController::class, 'store']);
Route::get('search', [FormController::class, 'searchForm'])->name('search');
Route::post('perform-search', [FormController::class, 'performSearch'])->name('perform-search');

