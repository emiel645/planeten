<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SolarSystem;

class SolarSystemController extends Controller
{

    public function index()
    {
        $solarSystems = SolarSystem::withCount('planets')->get();
        return view('solarsystems.index', compact('solarSystems'));
    }
    public function show(SolarSystem $solarSystem)
    {
        $solarSystem->load('planets'); 
    
        return view('solarsystems.show', compact('solarSystem'));
    }
    

    public function planets()
    {
        return $this->hasMany(Planet::class);
    }
}
