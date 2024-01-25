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
        $categories = $this->categoryService->all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {

        $newCategory = $this->categoryService->store($request);

        return redirect()->route('admin.categories.edit', $newCategory)->with('info', 'registro creado');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact("category"));
    }

    public function update(Category $category, CategoryRequest $request)
    {

        $updateCategory = $this->categoryService->update($request, $category);
        return redirect()->route('admin.categories.edit', $updateCategory)->with('info', 'registro actualizado');
    }

    public function destroy(Category $category)
    {
        $this->categoryService->destroy($category);

        return redirect()->route('admin.categories.index')->with('info', 'Se elimino el registro');
    }
}
