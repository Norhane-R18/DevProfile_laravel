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
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Project routes
    Route::resource('projects', ProjectController::class);

    // Skill routes
    Route::resource('skills', SkillController::class);
});

// Public routes
Route::get('/profile/{username}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
Route::get('/pdf/{username}', [PDFController::class, 'generate'])->name('pdf.generate');

require __DIR__.'/auth.php';
