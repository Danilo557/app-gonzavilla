<?php

use App\Models\Feature;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/sizes', function (Request $request) {

    $term = $request->term ?: '';

    $sizes = Size::select('id', 'unit as text')
        ->where('unit', 'like', '%' . $term . '%')
        ->get();

    return $sizes;
})->name('sizes.select2');
