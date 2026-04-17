<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryService
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $category = Category::create($request->validated());
        return view('admin.categories.edit', compact("category"));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact("category"));
    }

    public function updat(Request $request, Category $category)
    {
        $category->update($request->validated());
        return redirect()->route('admin.categories.edit', $category)->with('info', 'registro actualizado');
    }

    public function delete(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('info', 'Se elimino el registro');
    }
}
