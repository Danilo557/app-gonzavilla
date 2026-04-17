<?php

namespace App\Services;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeService
{

    public function index()
    {
        $sizes = Size::all();
        return view('admin.sizes.index', compact("sizes"));
    }

    public function create()
    {
        return view('admin.sizes.create');
    }

    public function store(Request $request)
    {
        $request->validated();
        $newSize = Size::create($request->all());
        return redirect()->route('admin.sizes.edit', $newSize)->with('info', 'registro creado');
    }

    public function edit(Size $size)
    {
        return view('admin.sizes.edit', compact("size"));
    }

    public function update(Size $size, Request $request)
    {
        $request->validated();
        $size->update($request->all());
        return redirect()->route('admin.sizes.edit', $size)->with('info', 'registro actualizado');
    }

    public function destroy(Size $size){
        $size->delete();
        return redirect()->route('admin.sizes.index')->with('info', 'Se elimino el registro');

    }
}
