<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settlement;

class DiagramController extends Controller
{
    public function index()
    {
        $telepulesek = Settlement::withCount('trails')->get();

        return view('diagram.index', compact('telepulesek'));
    }
}
