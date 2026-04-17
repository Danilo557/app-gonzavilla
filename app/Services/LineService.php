<?php

namespace App\Services;

use App\Models\Image;
use App\Models\Line;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class LineService
{
     


    public function index()
    {
        $lines = Line::all();
        return view('admin.lines.index', compact("lines"));
    }

    public function edit(Line $line)
    {
        $images = $line->images;
        return view('admin.lines.edit', compact("line", "images"));
    }

    public function update(Request $request, Line $line)
    {
        $line->update($request->all());
        return redirect()->route('admin.lines.edit', $line)->with('info', 'registro actualizado');
    }

    public function create()
    {
        return view('admin.lines.create');
    }

    public function store(Request $request)
    {
        $newLine = Line::create($request->all());
        return redirect()->route('admin.lines.edit', $newLine)->with('info', 'registro creado');
    }

    public function delete(Line $line)
    {
        $line->delete();
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
