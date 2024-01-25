<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureRequest;
use App\Models\Feature;
use App\Services\FeatureService;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    private FeatureService $featureService;

    public function __construct(FeatureService $featureService)
    {
        $this->featureService = $featureService;
    }

    public function index()
    {
        $features = $this->featureService->all();
        return view('admin.features.index', compact("features"));
    }

    public function create()
    {
        return view('admin.features.create');
    }

    public function store(FeatureRequest  $request)
    {
        $newFeature = $this->featureService->store($request);
        return redirect()->route('admin.features.edit', $newFeature)->with('info', 'registro creado');
    }

    public function edit(Feature $feature)
    {
        return view('admin.features.edit', compact("feature"));
    }

    public function update(FeatureRequest $request, Feature $feature)
    {
        $updatefeature = $this->featureService->update($request, $feature);
        return redirect()->route('admin.features.edit', $updatefeature)->with('info', 'registro actualizado');
    }

    public function destroy(Feature $feature)
    {
        $this->featureService->destroy($feature);
        return redirect()->route('admin.features.index')->with('info', 'Se elimino el registro');
    }
}
