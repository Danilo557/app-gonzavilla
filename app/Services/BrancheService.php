<?php

namespace App\Services;

use App\Models\Branche;
use App\Models\Municipality;
use App\Models\State;
use App\Models\Type;
use Illuminate\Http\Request;

class BrancheService
{


    public function index()
    {
        $branches = Branche::all();
        return view('admin.branches.index', compact('branches'));
    }

    public function create()
    {
        $states = State::pluck('name', 'id');
        $types = Type::pluck('name', 'id');
        $municipalities = [];
        return view('admin.branches.create', compact("states", "municipalities", "types"));
    }

    public function store(Request $request)
    {
        $request->validated();
        $newBranche = Branche::create($request->all());
        return redirect()->route('admin.branches.edit', $newBranche)->with('info', 'Registro creado');
    }

    public function edit(Branche $branch)
    {
        $states = State::pluck('name', 'id');
        $types = Type::pluck('name', 'id');
        $municipalities = Municipality::pluck('name', 'id');
        return view('admin.branches.edit', compact("branch", "states", "municipalities", "types"));
    }

    public function update(Branche $branch, Request $request)
    {
        $request->validated();
        $branch->update($request->all());
        return redirect()->route('admin.branches.edit', $branch)->with('info', 'Registro actualizado');
    }

    public function destroy($branche)
    {
        $branche = Branche::find($branche);
        $branche->delete();
        return redirect()->route('admin.branches.index')->with('info', 'Se elimino el registro');
    }
}
