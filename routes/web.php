<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

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
    return view('pages.home-page');
});
Route::get('/about', [HomeController::class, 'aboutList'])->name('about');
Route::get('/jobs', [JobController::class, 'jobBanner'])->name('jobs');
Route::get('/contact', [ContactController::class, 'contactDetails'])->name('contact');
Route::get('/blogs', [BlogController::class, 'blogDetails'])->name('blogs');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/job-create',[JobController::class, 'jobCreate'])->middleware(['auth', 'verified'])->name('job-create');
Route::get('/job-list',[JobController::class, 'jobList'])->middleware(['auth', 'verified'])->name('job-list');

require __DIR__.'/auth.php';
