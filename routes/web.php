<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/articles/{article:slug}', [HomeController::class, 'showArticle'])->name('articles.showArticle');
Route::get('/courses/{courseId}/course', [HomeController::class, 'fetchCourse'])->name('courses.course');
Route::get('/courses/{courseId}/programs', [HomeController::class, 'fetchPrograms'])->name('courses.programs');
Route::get('/programs/{program:slug}', [HomeController::class, 'programShow'])->name('programs.programShow');
Route::get('/courses', [HomeController::class, 'showAllCourses'])->name('courses.showAll');
Route::get('/courses/{courseId}/programs', [HomeController::class, 'fetchPrograms'])->name('courses.fetchPrograms');

