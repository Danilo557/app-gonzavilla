<?php

namespace App\Services;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeService extends Service
{
    public function __construct()
    {
        $this->model = 'App\Models\Size';
    }
}
