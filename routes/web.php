<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

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

Route::get('/category-list',[CategoryController::class, 'categoryList'])->middleware(['auth', 'verified'])->name('category-list');
Route::get('/category-create',[CategoryController::class, 'categoryCreate'])->middleware(['auth', 'verified'])->name('category-create');
Route::post('/category-store',[CategoryController::class, 'categoryStore'])->middleware(['auth', 'verified'])->name('category-store');
Route::get('/category/{id}/edit',[CategoryController::class, 'categoryEdit'])->middleware(['auth', 'verified'])->name('category.edit');
Route::put('/category/{id}',[CategoryController::class, 'categoryUpdate'])->middleware(['auth', 'verified'])->name('category.update');
Route::delete('/category/{id}',[CategoryController::class, 'categoryDelete'])->middleware(['auth', 'verified'])->name('category.delete');

Route::get('/job-list',[JobController::class, 'jobList'])->middleware(['auth', 'verified'])->name('job-list');
Route::get('/job-create',[JobController::class, 'jobCreate'])->middleware(['auth', 'verified'])->name('job-create');
Route::post('/job-store',[JobController::class, 'jobStore'])->middleware(['auth', 'verified'])->name('job-store');
Route::get('/jobs/{id}/edit',[JobController::class, 'jobEdit'])->middleware(['auth', 'verified'])->name('jobs.edit');
Route::put('/jobs/{id}',[JobController::class, 'jobUpdate'])->middleware(['auth', 'verified'])->name('jobs.update');
Route::get('/jobs/{id}',[JobController::class, 'jobShow'])->middleware(['auth', 'verified'])->name('jobs.show');
Route::delete('/jobs/{id}',[JobController::class, 'jobDelete'])->middleware(['auth', 'verified'])->name('jobs.delete');

require __DIR__.'/auth.php';
