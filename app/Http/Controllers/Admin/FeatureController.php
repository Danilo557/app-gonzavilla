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

        return $this->featureService->index();
    }

    public function create()
    {
        return $this->featureService->create();
    }

    public function store(FeatureRequest  $request)
    {
        return  $this->featureService->store($request);
    }

    public function edit(Feature $feature)
    {
        return  $this->featureService->edit($feature);
    }

    public function update(FeatureRequest $request, Feature $feature)
    {
        return  $this->featureService->update($feature, $request);
    }

    public function destroy(Feature $feature)
    {
        return  $this->featureService->destroy($feature);
    }
}
