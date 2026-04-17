<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        return $this->categoryService->index();
    }

    public function create()
    {
        return $this->categoryService->create();
    }

    public function store(CategoryRequest $request)
    {
        return $this->categoryService->store($request);
    }

    public function edit(Category $category)
    {
        return $this->categoryService->edit($category);
    }

    public function update(Category $category, CategoryRequest $request)
    {
        return  $this->categoryService->updat($request, $category);
    }

    public function destroy(Category $category)
    {
        return $this->categoryService->delete($category);
    }
}
