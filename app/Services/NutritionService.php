<?php

namespace App\Services;

use App\Models\Nutrition;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NutritionService extends Service
{
    public function __construct()
    {
        $this->model = 'App\Models\Nutrition';
    }

    
}
