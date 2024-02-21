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

Route::get('/', function () {
    return view('explores.index');
})->name('explores');

Route::get('courses', function () {
    return view('courses.index');
})->name('courses');

Route::get('course.detail', function () {
    return view('courses.show');
})->name('courses.show');

Route::get('categories', function () {
    return view('categories.index');
})->name('categories');

Route::get('episodes', function () {
    return view('episodes.index');
})->name('episodes');

Route::get('books', function () {
    return view('books.index');
})->name('books');

Route::get('articles', function () {
    return view('blogs.index');
})->name('articles');

// Route::get('login', function () {
//     return view('auth.login');
// })->name('login');


Route::get('login',[App\Http\Controllers\Auth\AuthController::class,'login'])->name('login');
Route::post('postLogin',[App\Http\Controllers\Auth\AuthController::class,'postLogin'])->name('postLogin');

Route::get('/', function () {
    return view('explores.index');
})->middleware(['auth', 'verified'])->name('explores');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
