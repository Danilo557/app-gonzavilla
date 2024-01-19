<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LineRequest;
use App\Models\Image;
use App\Models\Line;
use App\Services\LineService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LineController extends Controller
{
    private LineService $lineService;

    public function __construct(LineService $lineService)
    {
        $this->lineService = $lineService;
    }

    public function index()
    {
        $lines = $this->lineService->all();
        return view('admin.lines.index', compact("lines"));
    }

    public function edit(Line $line)
    {
        $images = $line->images;
        return view('admin.lines.edit', compact("line", "images"));
    }

    public function update(LineRequest $request, Line $line)
    {
        $updateline = $this->lineService->update($request, $line);

        return redirect()->route('admin.lines.edit', $updateline)->with('info', 'registro actualizado');
    }

    public function create()
    {
        return view('admin.lines.create');
    }

    public function store(LineRequest  $request)
    {
        $newLine = $this->lineService->store($request);

        return redirect()->route('admin.lines.edit', $newLine)->with('info', 'registro creado');
    }

    public function destroy(Line $line)
    {
        $this->lineService->destroy($line);

        return redirect()->route('admin.lines.index')->with('info', 'Se elimino el registro');
    }


    public function upload(Line $model, Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:2048'
        ]);

        $url = Storage::put('public/posts', $request->file('file'));

        $model->images()->create([
            'url' => $url
        ]);
    }

    public function images(Line $model)
    {
        $images = [];
        foreach ($model->images as $image) {
            $url = Storage::url($image->url);

            array_push($images, ['id' => $image->id, "src" => $url]);
        }
        return response()->json($images, 200);
    }

    public function removeImage(Image $image)
    {
        $image->delete();
        Storage::delete($image->url);
        return response()->json($image, 200);
    }
}
