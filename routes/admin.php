<?php

use App\Http\Controllers\Admin\BrancheController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\FileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LineController;
use App\Http\Controllers\Admin\NutritionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\SubcategoryController;

Route::get('', [HomeController::class, 'index'])->name('admin');

Route::resource('lines', LineController::class)->names('admin.lines');
Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('subcategories', SubcategoryController::class)->names('admin.subcategories');
Route::resource('features', FeatureController::class)->names('admin.features');
Route::resource('sizes', SizeController::class)->names('admin.sizes');
Route::resource('nutrition', NutritionController::class)->names('admin.nutrition');
Route::resource('products', ProductController::class)->names('admin.products');

Route::resource('branches', BrancheController::class)->names('admin.branches');

//Route::get('products/nutritions/delete', [ProductController::class, 'delete_nutrition'])->name('admin.products.delete.nutrition');
//Route::get('products/nutrition/table', [ProductController::class, 'nutrition_information'])->name('admin.products.nutrition.table');
Route::get('products/nutritions/privot_nutrition', [ProductController::class, 'privot_nutrition'])->name('admin.products.nutrition.pivot');




Route::post('lines/{model}/upload', [LineController::class, 'upload'])->name('admin.lines.upload');
Route::get('lines/{model}/images', [LineController::class, 'images'])->name('admin.lines.images');
Route::delete('lines/removeimage/{image}', [LineController::class, 'removeImage'])->name('admin.lines.removeimage');

 
