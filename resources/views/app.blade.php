<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SDGS-15造林資訊')</title>

    <style>
        /* 通用樣式 */
        body {
            background-image: url({{ URL::asset('Img/sectionbg.png') }});
        }

        .wrapper {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0 10%;
            padding: 20px;
            color: #333;
        }

        header {
            background-color: #00796b;
            margin: 20px 0px;
            width: 100%;
            text-align: center;
            margin-bottom: 0;

        }

        .Menu {
            background-color: #333;
            padding: 15px;

        }

        /* 標題 */
        h1 {
            display: inline-block;
            width: 70%;
            text-align: center;
            color: #2e3d48;
            padding: 5px 0;

            color: white;
            margin-bottom: 30px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin: 20px 0px;
        }

        /* 九宮格容器 */
        .forest-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* 每行顯示三個條目 */
            gap: 20px;
            padding: 20px;
        }

        /* 每一個森林數據塊 */
        .forest-entry {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* 鼠標懸停時的效果 */
        .forest-entry:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        /* 標題的顏色和間距 */
        .forest-entry h2 {
            color: #00796b;
            margin-bottom: 15px;
        }

        /* 標籤 */
        .forest-entry td {
            font-size: 16px;
            margin: 5px 0;
        }

        /* 使用分隔線分開各個區域 */
        .forest-entry .divider {
            border-top: 1px solid #eeeeee;
            margin: 15px 0;
        }

        /* 分頁控制區域 */
        .pagination {

            text-align: center;
            margin-top: 20px;
        }

        .pagination div {

            text-align: center;
            margin-top: -30px;
        }

        .pagination .flex-1 {
            display: none;
            text-align: center;
            margin-top: 20px;
        }

        .pagination svg {
            margin: -20px 0px;
            height: 100px;
            width: 100px;
            text-align: center;
            margin-top: 20px;
        }

        .pagination span {
            margin: -20px 0px;
            height: 100px;
            width: 100px;
            text-align: center;
            margin-top: 20px;
        }

        .pagination .duration-150 {}

        .pagination button {
            padding: 10px 20px;
            margin: 0 5px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .pagination button:hover {
            background-color: #004d40;
        }

        .button {
            float: inherit;
            padding: 10px 20px;
            font-size: 16px;
            border-bottom: 5px solid green;
            color: #f8f1b5;

            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .button:hover {
            background-color: #0285a5;
        }

        .optionA {
            text-decoration: none;
            color: #848afa;
            border-bottom: 5px solid rgb(227, 236, 227);

        }

        .show {
            text-align: left;

        }

        .show th {
            padding-left: 4px;

        }

        .formA {
            display: inline;

        }

        .formA input {
            border-top: 0;
            border-left: 0;
            border-right: 0;
            background-color: transparent;

        }

        .form-group input:valid {
            border: 2px solid green;
        }

        .form-group input:invalid {
            border: 2px solid rgb(255, 224, 224);
        }

        .form-control {
            width: 50%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            display: block;
            box-sizing: border-box;
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }

        .form-control:disabled {
            background-color: #e9ecef;
            border-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        @include('Forest.header')

        <div>
            @yield('Forest_content')
        </div>

        @include('Forest.footer')
    </div>

</body>

</html>
