<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
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

Route::resource('/feedback', FeedbackController::class);

Route::get('/ficha', function () {
    return view('ficha');
})->name("ficha");

Route::post('/uploudFicha', [PdfController::class, "uploudPDF"])->name("uploud");

Route::get('ficha', [FeedbackController::class, "ficha"])->name("ficha");

Route::get('/', [FeedbackController::class, "welcome"])->name("welcome");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
