<?php

namespace App\Services;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureService extends Service
{
    public function __construct()
    {
        $this->model = 'App\Models\Feature';
    }
}
