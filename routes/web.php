<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ContactController;

// HOME
Route::get('/', [HomeController::class, 'index'])->name('home');

// PROJECTS (user/public)
Route::get('/projects/all', [HomeController::class, 'allProjects'])->name('projects.all');
Route::get('/projects/category/{id}', [HomeController::class, 'getProjectsByCategory']);
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

// ADMIN
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('projects', ProjectController::class);
});

//CONTACT
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


