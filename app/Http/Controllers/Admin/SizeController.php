<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SizeRequest;
use App\Models\Size;
use App\Services\SizeService;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    private SizeService $sizeService;

    public function __construct(SizeService $sizeService)
    {
        $this->sizeService = $sizeService;
    }

    public function index()
    {
        return $this->sizeService->index();
    }

    public function create()
    {
        return $this->sizeService->create();
    }

    public function store(SizeRequest  $request)
    {
        return $this->sizeService->store($request);
    }

    public function edit(Size $size)
    {
        return $this->sizeService->edit($size);
    }

    public function update(SizeRequest $request, Size $size)
    {
        return $this->sizeService->update($size, $request);
    }

    public function destroy(Size $size)
    {
       return $this->sizeService->destroy($size);
    }
}
