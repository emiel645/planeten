<!DOCTYPE html>
<html>
<head>
    <title>List of Planets</title>
</head>
<body>
    <h1>List of Planets</h1>
    <ul>
        @foreach($planets as $planet)
            <li>
                {{ $planet->name }}
            </li>
        @endforeach
    </ul>
    
    <a href="{{ route('solarsystems.index') }}">
        <button>View Solar Systems</button>
        
    </a>
</body>
</html>
