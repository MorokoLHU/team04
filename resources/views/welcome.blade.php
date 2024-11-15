<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Page</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        /* Container */
        .container {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            color: #4CAF50;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
        }
        li {
            margin: 10px 0;
        }
        a {
            display: inline-block;
            text-decoration: none;
            color: #ffffff;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Navigation Page</h1>
        <ul>
            <li><a href="{{ url('/sdgs') }}">Intro to SDGs</a></li>
            <li><a href="{{ url('/forest') }}">Forest Information</a></li>
        </ul>
    </div>
</body>
</html>

