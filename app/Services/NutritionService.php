<?php

namespace App\Services;

use App\Models\Nutrition;
use Illuminate\Http\Request;

class NutritionService extends Service
{
    public function __construct()
    {
        $this->model = 'App\Models\Nutrition';
    }
}
