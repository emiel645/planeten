<!DOCTYPE html>
<html>
<head>
    <title>Solar System Details</title>
</head>
<body>
    <h1>Solar System Details</h1>

    <h2>Name: {{ $solarSystem->name }}</h2>
    <p>Age in Years: {{ $solarSystem->age_in_years }}</p>

    <h3>Planets in this Solar System:</h3>
    <ul>
        @foreach ($solarSystem->planets as $planet)
            <li>{{ $planet->name }}</li>
        @endforeach
    </ul>
    
    <a href="{{ route('solarsystems.index') }}" class="btn btn-primary">Back</a>
</body>
</html>
