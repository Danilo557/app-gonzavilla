<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrancheRequest;
use App\Models\Branche;
use App\Models\Municipality;
use App\Models\State;
use App\Services\BrancheService;


class BrancheController extends Controller

{
    private BrancheService $brancheService;

    public function __construct(BrancheService $brancheService)
    {
        $this->brancheService = $brancheService;
    }

    public function index()
    {
        $branches = $this->brancheService->all();
        return view('admin.branches.index', compact('branches'));
    }

    public function create()
    {
        $states=State::pluck('name','id');
        $municipalities=[];
        return view('admin.branches.create',compact("states","municipalities"));
    }

    public function store(BrancheRequest $request)
    {

        $newBranche = $this->brancheService->store($request);

        return redirect()->route('admin.branches.edit', $newBranche)->with('info', 'registro creado');
    }

    public function edit(Branche $branch)
    {
        $states=State::pluck('name','id');
        
        $municipalities=Municipality::pluck('name','id');

        return view('admin.branches.edit', compact("branch","states","municipalities"));
    }

    public function update(Branche $branch, BrancheRequest $request)
    {

        $updateBranch = $this->brancheService->update($request, $branch);
        return redirect()->route('admin.branches.edit', $updateBranch)->with('info', 'registro actualizado');
    }

    public function destroy(Branche $branche)
    {
        $this->brancheService->destroy($branche);

        return redirect()->route('admin.branches.index')->with('info', 'Se elimino el registro');
    }
}
