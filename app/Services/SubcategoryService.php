<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryService extends Service
{
    public function __construct()
    {
        $this->model = 'App\Models\Subcategory';
    }

    public function categories()
    {
        $categories = Category::pluck('name', 'id');
        return $categories;
    }
}
