<?php

use App\Http\Controllers\DictionaryTermController;
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
})->middleware(['auth'])->name('dashboard');

Route::get("/dictionary-terms", [DictionaryTermController::class, 'index'])->name('dictionary-terms-index');

Route::get("/dictionary-terms/add", [DictionaryTermController::class, 'create'])->name('dictionary-terms-add');

Route::post("/dictionary-terms/add", [DictionaryTermController::class, 'store'])->name('dictionary-terms-add');

require __DIR__ . '/auth.php';
