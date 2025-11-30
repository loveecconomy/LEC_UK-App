<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/job', [HomeController::class, 'index_portal'])->name('job.index');
Route::post('/job/apply', [JobController::class, 'apply'])->name('job.apply');

Route::get('/new-here', [HomeController::class, 'newHere'])->name('pages.new-here');
Route::get('/next-steps', [HomeController::class, 'nextSteps'])->name('pages.next-steps');
Route::get('/community', [HomeController::class, 'community'])->name('pages.community');
Route::get('/give', [HomeController::class, 'give'])->name('pages.give');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');
