<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Feature;
use App\Models\Line;
use App\Models\Product;
use App\Models\Size;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductService
{
    
    protected  function update(Request $request, Product $product)
    {
        
    }

    public function lines()
    {
        $lines = Line::pluck('name', 'id');
        return $lines;
    }

    public function categories()
    {
        $category = Category::pluck('name', 'id');
        return $category;
    }

    public function subcategories($category_id)
    {
        $subcategories = Subcategory::where('category_id', $category_id)->pluck("name", "id");
        return $subcategories;
    }

    public function features()
    {
        $features = Feature::pluck("name", "id");
        return $features;
    }

    public function sizes()
    {
        $sizes = Size::all();
        return $sizes;
    }
}
