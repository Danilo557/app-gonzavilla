<?php

namespace App\Services;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Line;
use App\Models\Nutrition;
use App\Models\Product;
use App\Models\Size;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductService
{

    public function all()
    {
        $products = Product::all();
        return view('admin.products.index', compact("products"));
    }

    public function create()
    {
        $lines = Line::pluck('name', 'id');
        $categories = Category::pluck('name', 'id');
        //$subcategories = Subcategory::where('category_id', $category->id)->pluck("name", "id");
        $features = Feature::pluck("name", "id");
        $sizes = Size::all();


        $subcategories = collect([]);
        $product_size = collect([]);
        return view('admin.products.create', compact("lines", "categories", "features", "sizes", "subcategories", "product_size"));
    }

    public function store(Request $request)
    {   
        $product = Product::create($request->all());
        $product->sizes()->sync($request->sizes);
        return redirect()->route('admin.products.edit', $product)->with('info', 'registro creado');
    }


    public function edit(Product $product){
        $lines = Line::pluck('name', 'id');
        $categories = Category::pluck('name', 'id');
        $subcategories = Subcategory::where('category_id', $product->category->id)->pluck("name", "id");
        $features = Feature::pluck("name", "id");
        $sizes = Size::all();

        $product_size = $product->sizes;
        $nutritions = $product->nutritions;

        $nutrition_list = Nutrition::all();

        return view('admin.products.edit', compact("product", "lines", "categories", "subcategories", "features", "sizes", "product_size", "nutritions", "nutrition_list"));
    }

    public  function update(ProductRequest $request, Product $product)
    {

        
        

        if ($request->file('image')) {
            $url = Storage::put('posts', $request->file('image'));

            if ($product->image) {
                Storage::delete($product->image->url);
                $product->image->update([
                    'url' => $url
                ]);
            } else {
                $product->image()->create([
                    'url' => $url
                ]);
            }
        }
        $product->sizes()->sync($request->sizes);
        $product->update();
        $product->update($request->all());
        return redirect()->route('admin.products.edit', $product)->with('info', 'registro actualizado');
    }



    public function delete_nutrition($nutrition_product_id)
    {
    }

    public function privot_nutrition(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'nutrition_id' => 'required',
            'percentage' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'state' => 'fail',
                'code' => 200,
                'errors' => $validator->errors()
            ], 200);
        }

        $product = Product::findOfFail($request->product_id);
        $product->nutritions()->asyn($request->all());

        return response()->json([
            'state' => 'ok',
            'code' => 200,
        ], 200);
    }
}
