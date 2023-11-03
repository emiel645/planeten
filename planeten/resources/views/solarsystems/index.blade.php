<!DOCTYPE html>
<html>
<head>
    <title>List of Solar Systems</title>
</head>
<body>
   <h1>List of Solar Systems</h1>
<ul>
    @foreach($solarSystems as $solarSystem)
        <li>
            <h2>{{ $solarSystem->name }}</h2>
            <p>Age in Years: {{ $solarSystem->age_in_years }}</p>
            <p>Number of Planets: {{ $solarSystem->planets_count }}</p>
            <a href="{{ route('solarsystems.show', ['solarSystem' => $solarSystem->id]) }}">View Details</a>
        </li>
    @endforeach
</ul>

    
</body>
</html>
