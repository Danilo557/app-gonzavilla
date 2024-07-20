<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Line;
use App\Models\Nutrition;
use App\Models\Product;
use App\Models\Size;
use App\Models\Subcategory;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private ProductService $productService;



    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return $this->productService->all();
    }

    public function create()
    {
        return $this->productService->create();
    }

    public function store(ProductRequest $request)
    {
        return $this->productService->store($request);
    }

    public function edit(Product $product)
    {

        return $this->productService->edit($product);
    }

    public function update(ProductRequest $request, Product $product)
    {
        return $this->productService->update($request, $product);
    }

    public function privot_nutrition(Request $request)
    {

        $this->productService->privot_nutrition($request);
    }
}
