<?php

use Illuminate\Support\Facades\Route;


// Admin routes
Route::get('/admin', function() {
    return view('admin');
});
Route::get('/admin/articles', [App\Http\Controllers\AdminArticlesController::class, 'getAllArticles'])->name('admin.getAllArticles');
Route::post('/articles', [App\Http\Controllers\AdminArticlesController::class, 'store']);
Route::get('/admin/create', [App\Http\Controllers\AdminArticlesController::class, 'create']);
Route::get('/admin/{article:title}/edit', [App\Http\Controllers\AdminArticlesController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{article}', [App\Http\Controllers\AdminArticlesController::class, 'update']);

// Welcome page route
Route::get('/' , function() {
    return view('welcome');
});
// About routes
Route::get('/about', [App\Http\Controllers\ArticlesController::class, 'getAboutArticles']);
// Articles/Edit/Add routes
Route::get('/articles', [App\Http\Controllers\ArticlesController::class, 'getAllArticles']);
Route::get('/articles/{article}', [App\Http\Controllers\ArticlesController::class, 'show'])->name('articles.show');

