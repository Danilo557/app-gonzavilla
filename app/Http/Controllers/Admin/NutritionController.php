<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NutritionRequest;
use App\Models\Nutrition;
use App\Services\NutritionService;
use Illuminate\Http\Request;

class NutritionController extends Controller
{
    private NutritionService $nutritionService;

    public function __construct(NutritionService $nutritionService)
    {
        $this->nutritionService = $nutritionService;
    }

    public function index()
    {
        $nutritions = $this->nutritionService->all();
        return view('admin.nutrition.index', compact("nutritions"));
    }

    public function create()
    {
        return view('admin.nutrition.create');
    }

    public function store(NutritionRequest  $request)
    {
        $newNutrition = $this->nutritionService->store($request);
        return redirect()->route('admin.nutrition.edit', $newNutrition)->with('info', 'registro creado');
    }

    public function edit(Nutrition $nutrition)
    {
        return view('admin.nutrition.edit', compact("nutrition"));
    }

    public function update(NutritionRequest $request, Nutrition $nutrition)
    {
        $updatenutrition = $this->nutritionService->update($request, $nutrition);
        return redirect()->route('admin.nutrition.edit', $updatenutrition)->with('info', 'registro actualizado');
    }

    public function destroy(Nutrition $nutrition)
    {
        $this->nutritionService->destroy($nutrition);
        return redirect()->route('admin.nutrition.index')->with('info', 'Se elimino el registro');
    }
}
