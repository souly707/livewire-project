<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/')->name('front.')->group(function () {
    Route::view('', 'front.index')->name('index');
    Route::view('about', 'front.about')->name('about');
    Route::view('contact', 'front.contact')->name('contact');
    Route::view('projects', 'front.projects')->name('projects');
    Route::view('services', 'front.services')->name('services');
    Route::view('team', 'front.team')->name('team');
    Route::view('testimonials', 'front.testimonials')->name('testimonials');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/admin/')->name('admin.')->group(function () {

    Route::middleware('guest:admin')->group(function () {
        //==================================================== Login Page
        Route::view('/login', 'admin.auth.login')->name('login');
    });

    Route::middleware('admin')->group(function () {
        //==================================================== Index Page
        Route::view('', 'admin.index')->name('index');
        //==================================================== Settings Page
        Route::view('settings', 'admin.settings.index')->name('settings');
        //==================================================== Skills Page
        Route::view('skills', 'admin.skills.index')->name('skills');
        //==================================================== Subscribers Page
        Route::view('subscribers', 'admin.subscribers.index')->name('subscribers');
        //==================================================== Counters Page
        Route::view('counters', 'admin.counters.index')->name('counters');
        //==================================================== Services Page
        Route::view('services', 'admin.services.index')->name('services');
    });
});
