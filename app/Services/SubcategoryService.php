<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryService
{
    public function index()
    {
        $subcategories = Subcategory::all();
        return view('admin.subcategories.index', compact("subcategories"));
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.subcategories.create', compact("categories"));
    }

    public function store(Request $request)
    {
        $newSubcategory = Subcategory::create($request->all());
        return redirect()->route('admin.subcategories.edit', $newSubcategory)->with('info', 'registro creado');
    }

    public function edit(Subcategory $subcategory)
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.subcategories.edit', compact("subcategory", "categories"));
    }

    public function update(Request $request, Subcategory $subcategory)
    {
        $subcategory->update($request->all());
        return redirect()->route('admin.subcategories.edit', $subcategory)->with('info', 'registro actualizado');
    }

    public function delete(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('admin.subcategories.index')->with('info', 'Se elimino el registro');
    }
}
