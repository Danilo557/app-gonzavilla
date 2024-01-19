<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Line;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload(&$model, Request $request)
    {

        $request->validate([
            'file' => 'required|image|max:2048'
        ]);

        $url = Storage::put('public/posts', $request->file('file'));

        $model->images()->create([
            'url' => $url
        ]);
    }

    public function images($model)
    {

        
        
        return response()->json($model->images, 200);
    }
}
