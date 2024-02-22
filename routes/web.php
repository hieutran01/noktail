<?php

use App\Http\Controllers\Admin\EmailTemplateController;
use App\Http\Controllers\Admin\UserLessonController;
use App\Http\Controllers\Admin\UserLessonPassController;
use App\Http\Controllers\Admin\WpPostController;
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
    
    Route::prefix('admin')->group(function () {
        Route::get('/email-templates', [EmailTemplateController::class, 'index'])->name('admin.email-templates');
        Route::get('/email-templates/create', [EmailTemplateController::class, 'create'])->name('admin.email-templates.create');
        Route::post('/email-templates', [EmailTemplateController::class, 'store'])->name('admin.email-templates.store');
        Route::get('/email-templates/{id}/edit', [EmailTemplateController::class, 'edit'])->name('admin.email-templates.edit');
        Route::put('/email-templates/{id}', [EmailTemplateController::class, 'update'])->name('admin.email-templates.update');
        Route::delete('/email-templates/{id}', [EmailTemplateController::class, 'destroy'])->name('admin.email-templates.destroy');
    
         // Các routes cho quản lý user lessons
        Route::get('/user-lessons', [UserLessonController::class, 'index'])->name('admin.user-lessons');
        Route::get('/user-lessons/create', [UserLessonController::class, 'create'])->name('admin.user-lessons.create');
        Route::post('/user-lessons', [UserLessonController::class, 'store'])->name('admin.user-lessons.store');
        Route::get('/user-lessons/{id}/edit', [UserLessonController::class, 'edit'])->name('admin.user-lessons.edit');
        Route::put('/user-lessons/{id}', [UserLessonController::class, 'update'])->name('admin.user-lessons.update');
        Route::delete('/user-lessons/{id}', [UserLessonController::class, 'destroy'])->name('admin.user-lessons.destroy');
    
        // Routes cho quản lý bảng user lesson pass
        Route::get('/user-lesson-passes', [UserLessonPassController::class, 'index'])->name('admin.user-lesson-passes');
        Route::get('/user-lesson-passes/create', [UserLessonPassController::class, 'create'])->name('admin.user-lesson-passes.create');
        Route::post('/user-lesson-passes', [UserLessonPassController::class, 'store'])->name('admin.user-lesson-passes.store');
        Route::get('/user-lesson-passes/{id}/edit', [UserLessonPassController::class, 'edit'])->name('admin.user-lesson-passes.edit');
        Route::put('/user-lesson-passes/{id}', [UserLessonPassController::class, 'update'])->name('admin.user-lesson-passes.update');
        Route::delete('/user-lesson-passes/{id}', [UserLessonPassController::class, 'destroy'])->name('admin.user-lesson-passes.destroy');
        // Routes cho quản lý bảng wp_posts
        Route::get('/posts', [WpPostController::class, 'index'])->name('admin.posts');
        Route::get('/posts/create', [WpPostController::class, 'create'])->name('admin.posts.create');
        Route::post('/posts', [WpPostController::class, 'store'])->name('admin.posts.store');
        Route::get('/posts/{id}/edit', [WpPostController::class, 'edit'])->name('admin.posts.edit');
        Route::put('/posts/{id}', [WpPostController::class, 'update'])->name('admin.posts.update');
        Route::delete('/posts/{id}', [WpPostController::class, 'destroy'])->name('admin.posts.destroy');
    });
    

    