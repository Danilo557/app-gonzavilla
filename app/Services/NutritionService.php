<?php

namespace App\Services;

use App\Models\Nutrition;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NutritionService
{


    public function index()
    {
        $nutritions = Nutrition::all();
        return view('admin.nutrition.index', compact("nutritions"));
    }

    public function create()
    {
        return view('admin.nutrition.create');
    }

    public function store(Request $request)
    {
        $nutrition = Nutrition::create($request->all());
        return redirect()->route('admin.nutrition.edit', $nutrition)->with('info', 'registro creado');
    }

    public function edit(Nutrition $nutrition)
    {
        return view('admin.nutrition.edit', compact("nutrition"));
    }

    public function update(Request $request, Nutrition $nutrition)
    {
        $nutrition->update($request->all());
        return redirect()->route('admin.nutrition.edit', $nutrition)->with('info', 'registro actualizado');
    }

    public function delete(Nutrition $nutrition)
    {
        $nutrition->delete();
        return redirect()->route('admin.nutrition.index')->with('info', 'Se elimino el registro');
    }
}
