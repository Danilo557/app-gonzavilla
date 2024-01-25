<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubcategoryRequest;
use App\Models\Subcategory;
use App\Services\SubcategoryService;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    private SubcategoryService $subcategoryService;

    public function __construct(SubcategoryService $subcategoryService)
    {
        $this->subcategoryService = $subcategoryService;
    }

    public function index()
    {
        $subcategories = $this->subcategoryService->all();
        return view('admin.subcategories.index', compact("subcategories"));
    }

    public function create()
    {
        $categories = $this->subcategoryService->categories();
        return view('admin.subcategories.create', compact("categories"));
    }

    public function store(SubcategoryRequest $request)
    {
        $newSubcategory = $this->subcategoryService->store($request);
        return redirect()->route('admin.subcategories.edit', $newSubcategory)->with('info', 'registro creado');
    }

    public function edit(Subcategory $subcategory)
    {
        $categories = $this->subcategoryService->categories();
        return view('admin.subcategories.edit', compact("subcategory", "categories"));
    }

    public function update(SubcategoryRequest $request, Subcategory $subcategory)
    {
        $updatesubcategory = $this->subcategoryService->update($request, $subcategory);
        return redirect()->route('admin.subcategories.edit', $updatesubcategory)->with('info', 'registro actualizado');
    }

    public function destroy(Subcategory $subcategory)
    {
        $this->subcategoryService->destroy($subcategory);
        return redirect()->route('admin.subcategories.index')->with('info', 'Se elimino el registro');
    }
}
