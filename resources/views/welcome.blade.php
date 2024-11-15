<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>導航頁面</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
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
            padding: 15px;
            max-width: 350px;
            text-align: center;
        }
        h1 {
            font-size: 20px;
            color: #4CAF50;
            margin-bottom: 15px;
        }
        ul {
            list-style-type: none;
        }
        li {
            margin: 8px 0;
        }
        a {
            display: inline-block;
            text-decoration: none;
            color: #ffffff;
            background-color: #4CAF50;
            padding: 8px 15px;
            font-size: 14px;
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
        <h1>導航頁面</h1>
        <ul>
            <li><a href="{{ url('/sdgs') }}">SDGs 簡介</a></li>
            <li><a href="{{ url('/forest') }}">森林資訊</a></li>
        </ul>
    </div>
</body>
</html>


