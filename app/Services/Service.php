<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Service
{
    protected $model;

    public function all()
    {
        $models = $this->model::all();
        return $models;
    }

    public function store(Request $request)
    {
        $model = $this->model::create($request->all());
        return $model;
    }

    public function update(Request $request, Model $model): Model
    {
        $model->update($request->all());
        return $model;
    }

    public function destroy(Model $model)
    {
        $model->delete();
    }
}
