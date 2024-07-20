<?php

namespace App\Http\Controllers;

use App\Models\Line;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }

    public function lines(Line $line)
    {
        return view("pages.line", compact("line"));
    }

    public function pawwow()
    {
        return view("pages.paw-wow");
    }
}
