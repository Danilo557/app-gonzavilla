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
        return $this->nutritionService->index();
    }

    public function create()
    {
        return $this->nutritionService->create();
    }

    public function store(NutritionRequest  $request)
    {
        return $this->nutritionService->store($request);
    }

    public function edit(Nutrition $nutrition)
    {
        return $this->nutritionService->edit($nutrition);
    }

    public function update(NutritionRequest $request, Nutrition $nutrition)
    {
        return $this->nutritionService->update($request, $nutrition);
    }

    public function destroy(Nutrition $nutrition)
    {
        return $this->nutritionService->delete($nutrition);
    }
}
