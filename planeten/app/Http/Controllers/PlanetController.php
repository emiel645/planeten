<?php

namespace App\Http\Controllers;

use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all(); 
        return view('planets.index', compact('planets'));
    }

    public function showMars()
    {
        $mars = Planet::where('name', 'Mars')->first();
        return view('planet', ['planets' => [$mars]]);
    }


}
