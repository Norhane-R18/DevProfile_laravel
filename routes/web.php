<?php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController; 
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicProfileController;
use App\Http\Controllers\PDFController;

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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //raso
    Route::resource('projects',ProjectController::class);
     Route::resource('skills', SkillController::class);
     Route::get('/profile/{username}', [PublicProfileController::class, 'show'])->name('profile.show');
     Route::get('/pdf/{username}', [PDFController::class, 'generate'])->name('pdf.generate');


});


require __DIR__.'/auth.php';
