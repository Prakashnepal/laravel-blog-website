<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homepage']);
route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified', 'user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';





route::get('/register', [HomeController::class, 'register'])->middleware('auth')->name('home');

Route::get('logout', [HomeController::class, 'logout'])->middleware('auth')->name('admin.logout');

Route::get('admin-logout', [HomeController::class, 'homepage'])->middleware('auth')->name('ad.logout');

Route::get('/post_page', [AdminController::class, 'post_page']);

Route::post('/add_post', [AdminController::class, 'add_post']);

Route::get('/show_post', [AdminController::class, 'show_post']);

Route::get('/delete_post/{id}', [AdminController::class, 'delete_post']);

Route::get('/edit_page/{id}', [AdminController::class, 'edit_page']);

Route::post('/update_post/{id}', [AdminController::class, 'update_post']);

Route::get('/post_details/{id}', [HomeController::class, 'post_details']);

Route::get('/create_post', [HomeController::class, 'create_post'])->middleware('auth');

Route::post('/user_post', [HomeController::class, 'user_post'])->middleware('auth');

Route::get('/my_post', [HomeController::class, 'my_post'])->middleware('auth');

Route::get('/my_post_del/{id}', [HomeController::class, 'my_post_del'])->middleware('auth');

Route::get('/my_post_edit/{id}', [HomeController::class, 'my_post_edit'])->middleware('auth');

Route::post('/update_post_data/{id}', [HomeController::class, 'update_post_data'])->middleware('auth');

Route::get('/accept_post/{id}', [AdminController::class, 'accept_post']);

Route::get('/reject_post/{id}', [AdminController::class, 'reject_post']);
