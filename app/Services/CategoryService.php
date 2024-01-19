<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryService extends Service
{
    public function __construct()
    {
        $this->model = 'App\Models\Category';
    }
}
