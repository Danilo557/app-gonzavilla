<?php

use App\Http\Controllers\Admin\ProductController;
use App\Models\Municipality;
use App\Models\Nutrition;
use App\Models\Product;
use App\Models\Size;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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


Route::post('/subcategories', function (Request $request) {

    $subcategories = Subcategory::where('category_id', $request->category_id)->pluck("name", "id");
    return $subcategories;
})->name('subcategories.select2');




Route::post('/municipalities', function (Request $request) {

    $municipalities = Municipality::where('state_id', $request->state_id)->pluck("name", "id");
    return $municipalities;
})->name('municipalities');



Route::post('/nutrition_table', function (Request $request) {
    $product = Product::find($request->product_id);
    return $product->nutritions;
})->name("nutrition.table");


Route::post('/nutrition_delete', function (Request $request) {

    $product = Product::find($request->product_id);
    $product->nutritions()->detach($request->nutrition_id);
    return response()->json(200);
})->name("nutrition.delete");


Route::post('/nutrition_add', function (Request $request) {

    $validator = Validator::make($request->all(), [
        'product_id' => [
            'required',
            Rule::unique('nutrition_product')->where(function ($query) use ($request) {
                return $query->where('nutrition_id', $request->nutrition_id);
            })
        ],

        "nutrition_id" => "required",
        "percentage" => "required|numeric|min:0|max:100",


    ]);


    


    if ($validator->fails()) {
        return response()->json($validator->messages(), Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    $product = Product::find($request->product_id);
    $product->nutritions()->attach($request->nutrition_id, ['percentage' => $request->percentage]);
    return response()->json(200);
})->name("nutrition.add");



//Route::post("nutritions/products", [NutritionController::class, "privot_nutrition"])->name("nutiotions.products");
