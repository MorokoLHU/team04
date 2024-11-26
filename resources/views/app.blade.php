in<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>森林面積資訊</title>
    <style>
        /* 全局設置 */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjpHLXhP3WRubUIKAzOebgjKoaYC7pGgZxQAABBDKydZo7NCAVcH_NGCtH41Vdh0oMjq74C6m60DMzLPPk-rEc6x6etESaWUJ3TFRHphXleR81BsBLWFznsRxcNLiuyhbM81_MOarkTpV8X/s1600/2.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #4f4f4f;
            line-height: 1.6;
        }

        h1 {
            text-align: center;
            color: #6a4c31;
            font-size: 36px;
            margin: 40px 0;
            font-weight: bold;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        /* 表格容器設置 */
        .forest-table-container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            overflow-x: auto;
        }

        /* 表格設置 */
        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 8px;
        }

        th, td {
            padding: 14px;
            text-align: left;
            border: 1px solid #ddd;
            font-size: 16px;
            transition: background-color 0.2s ease;
        }

        /* 表頭樣式 */
        th {
            background-color: #4d7c38;
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* 表格內容樣式 */
        td {
            background-color: #f9f9f9;
            color: #333;
        }

        /* 奇偶行樣式 */
        tr:nth-child(even) td {
            background-color: #eef5eb;
        }

        /* 動態效果 */
        tr:hover td {
            background-color: #d4e5d1;
        }

        /* 響應式設計 */
        @media (max-width: 768px) {
            th, td {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<div>
    <div class="p-6 border-light-100:">
        @include('head')
    </div>
    <div class="p-6 border-t border-gray-200 dark:broder-gray-700 md:broder-t-0 md:border-1">
        @yield('forest_theme')
    </div>
    <div class="p-6 border-t border-gray-200 dark:broder-gray-700 md:broder-t-0 md:border-1">
        @include('footer')
    </div>
</div>
</body>
</html>
