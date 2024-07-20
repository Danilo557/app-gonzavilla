<?php

namespace App\Services;

use App\Models\Branche;
use Illuminate\Http\Request;

class BrancheService extends Service
{
    public function __construct()
    {
        $this->model = 'App\Models\Branche';
    }
}
