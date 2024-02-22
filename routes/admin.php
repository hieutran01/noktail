<?php 
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\EmailTemplateController;
// Route::resource('/admin/email-templates', EmailTemplateController::class);
Route::get('/admin/email-templates', [EmailTemplateController::class, 'index'])->name('admin.email-templates');
