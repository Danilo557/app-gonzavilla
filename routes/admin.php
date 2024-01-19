<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LineController;

Route::get('', [HomeController::class, 'index'])->name('admin');

Route::resource('lines', LineController::class)->names('admin.lines');
Route::resource('categories', CategoryController::class)->names('admin.categories');

Route::post('lines/{model}/upload', [LineController::class, 'upload'])->name('admin.lines.upload');
Route::get('lines/{model}/images', [LineController::class, 'images'])->name('admin.lines.images');
Route::delete('lines/removeimage/{image}', [LineController::class, 'removeImage'])->name('admin.lines.removeimage');
