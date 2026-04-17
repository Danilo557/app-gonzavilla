<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LineRequest;
use App\Models\Image;
use App\Models\Line;
use App\Services\LineService;
use Illuminate\Http\Request;


class LineController extends Controller
{
    private LineService $lineService;

    public function __construct(LineService $lineService)
    {
        $this->lineService = $lineService;
    }

    public function index()
    {
        return $this->lineService->index();
    }

    public function edit(Line $line)
    {
        return $this->lineService->edit($line);
    }

    public function update(LineRequest $request, Line $line)
    {
        return $this->lineService->update($request, $line);
    }

    public function create()
    {
        return $this->lineService->create();
    }

    public function store(LineRequest  $request)
    {
       return $this->lineService->store($request);
    }

    public function destroy(Line $line)
    {
       return $this->lineService->delete($line);
    }


    public function upload(Line $model, Request $request)
    {
       $this->lineService->upload($model, $request);    
    }

    public function images(Line $model)
    {
      return $this->lineService->images($model);
    }

    public function removeImage(Image $image)
    {
        return $this->lineService->removeImage($image);
    }
}
