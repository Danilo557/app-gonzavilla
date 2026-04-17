<?php

namespace App\Services;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureService
{


    public function index()
    {
        $features = Feature::all();
        return view('admin.features.index', compact("features"));
    }

    public function create()
    {
        return view('admin.features.create');
    }

    public function store(Request $request)
    {
        $request->validated();
        $newFeature = Feature::create($request->all());
        return redirect()->route('admin.features.edit', $newFeature)->with('info', 'registro creado');
    }

    public function edit(Feature $feature)
    {
        return view('admin.features.edit', compact("feature"));
    }

    public function update(Feature $feature, Request $request)
    {
        $request->validated();
        $feature->update($request->all());
        return redirect()->route('admin.features.edit', $feature)->with('info', 'registro actualizado');
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('admin.features.index')->with('info', 'Se elimino el registro');
    }
}
