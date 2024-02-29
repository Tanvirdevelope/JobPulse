<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyInfoController;
use App\Http\Controllers\JobCircularController;

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

// Route::get('/', function () {
//     return view('pages.home-page');
// });
Route::get('/',[JobCircularController::class, 'allItem']);
Route::get('/job-details/{id}', [JobCircularController::class, 'show_jobDetails']);
Route::get('/jobs', [JobCircularController::class, 'jobIndex']);


Route::get('/about', [HomeController::class, 'aboutList'])->name('about');
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


Route::get('/company-list',[CompanyInfoController::class, 'companyList'])->middleware(['auth', 'verified'])->name('company-list');





Route::get('/job-list',[JobCircularController::class, 'jobList'])->middleware(['auth', 'verified'])->name('job-list');
Route::get('/job-create',[JobCircularController::class, 'jobCreate'])->middleware(['auth', 'verified'])->name('job-create');
Route::post('/job-store',[JobCircularController::class, 'jobStore'])->middleware(['auth', 'verified'])->name('job-store');
Route::get('/jobs/{id}/edit',[JobCircularController::class, 'jobEdit'])->middleware(['auth', 'verified'])->name('jobs.edit');
Route::put('/jobs/{id}',[JobCircularController::class, 'jobUpdate'])->middleware(['auth', 'verified'])->name('jobs.update');
Route::get('/jobs/{id}',[JobCircularController::class, 'jobShow'])->middleware(['auth', 'verified'])->name('jobs.show');
Route::delete('/jobs/{id}',[JobCircularController::class, 'jobDelete'])->middleware(['auth', 'verified'])->name('jobs.delete');

require __DIR__.'/auth.php';
