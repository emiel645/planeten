<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    protected $table = 'solar_systems'; // Specify the table name if it's different from the model's name
    protected $fillable = ['name', 'age_in_years'];

    public function planets()
    {
        return $this->hasMany(Planet::class);
}
}