<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $establishments = Establishment::orderBy('id', 'ASC')->get();

        return view('dashboard', compact('establishments'));
    }
}
