<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrancheRequest;
use App\Models\Branche;
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
        return $this->brancheService->index();
    }

    public function create()
    {
        return $this->brancheService->create();
    }

    public function store(BrancheRequest $request)
    {

        return  $this->brancheService->store($request);
    }

    public function edit(Branche $branch)
    {
        return  $this->brancheService->edit($branch);
    }

    public function update(Branche $branch, BrancheRequest $request)
    {

        return  $this->brancheService->update($branch, $request);
    }

    public function destroy( $branche)
    {   
        
        return $this->brancheService->destroy($branche);
    }
}
