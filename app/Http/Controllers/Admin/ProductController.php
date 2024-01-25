<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
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
        $products = $this->productService->all();
        return view('admin.products.index', compact("products"));
    }

    public function edit(Product $product)
    {
        $lines = $this->productService->lines();
        $categories = $this->productService->categories();
        $subcategories = $this->productService->subcategories($product->category_id);
        $features = $this->productService->features();
        $sizes = $this->productService->sizes();
        $product_size = $product->sizes;
        return view('admin.products.edit', compact("product", "lines", "categories", "subcategories", "features", "sizes", "product_size"));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $updateproduct = $this->productService->update($request, $product);
        return redirect()->route('admin.products.edit', $updateproduct)->with('info', 'registro actualizado');
    }
}
