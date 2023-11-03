<!DOCTYPE html>
<html>
<head>
    <title>Planets Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 18px;
            color: #666;
        }

        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Planets Information</h1>
    <p>Welcome to my page. Would you like to see the planets or the solar system?</p>

    <a href="{{ route('planets.index') }}" class="btn btn-primary">Go to Planets</a>
    <a href="{{ route('solarsystems.index') }}">Go to Solar Systems Index</a>
</body>
</html>
