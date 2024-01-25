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
        $sizes = $this->sizeService->all();
        return view('admin.sizes.index', compact("sizes"));
    }

    public function create()
    {
        return view('admin.sizes.create');
    }

    public function store(SizeRequest  $request)
    {
        $newSize = $this->sizeService->store($request);
        return redirect()->route('admin.sizes.edit', $newSize)->with('info', 'registro creado');
    }

    public function edit(Size $size)
    {
        return view('admin.sizes.edit', compact("size"));
    }

    public function update(SizeRequest $request, Size $size)
    {
        $updatesize = $this->sizeService->update($request, $size);
        return redirect()->route('admin.sizes.edit', $updatesize)->with('info', 'registro actualizado');
    }

    public function destroy(Size $size)
    {
        $this->sizeService->destroy($size);
        return redirect()->route('admin.sizes.index')->with('info', 'Se elimino el registro');
    }
}
