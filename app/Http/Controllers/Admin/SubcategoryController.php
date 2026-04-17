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
        return $this->subcategoryService->index();
    }

    public function create()
    {
        return $this->subcategoryService->create();
    }

    public function store(SubcategoryRequest $request)
    {
        return $this->subcategoryService->store($request);
    }

    public function edit(Subcategory $subcategory)
    {
        return $this->subcategoryService->edit($subcategory);
    }

    public function update(SubcategoryRequest $request, Subcategory $subcategory)
    {
        return $this->subcategoryService->update($request, $subcategory);
    }

    public function destroy(Subcategory $subcategory)
    {
        return $this->subcategoryService->delete($subcategory);
    }
}
