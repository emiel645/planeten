<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $table = 'planets'; // Specify the table name
    protected $primaryKey = 'id'; // Specify the primary key
    protected $fillable = ['name', 'description']; // Specify fillable attributes

    public function solarSystem()
{
    return $this->belongsTo(SolarSystem::class, 'solar_system_id');
}

public function index()
{
    $planets = Planet::with('solarSystem')->get();
    return view('planet', ['planets' => $planets]);
}
}
