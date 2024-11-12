<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forest Data</title>
    <style>
        /* 通用樣式 */
        body{
            background-image: url({{URL::asset('Img/sectionbg.png')}});
        }
        .wrapper {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0 20%;
            padding: 20px;
            color: #333;
        }

        /* 標題 */
        h1 {
            text-align: center;
            color: #2e3d48;
            padding: 20px 0;
            background-color: #00796b;
            color: white;
            margin-bottom: 30px;
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

        /* 小螢幕適配 */
        @media (max-width: 768px) {
            .forest-grid {
                grid-template-columns: repeat(2, 1fr);
                /* 小螢幕顯示兩列 */
            }
        }

        @media (max-width: 480px) {
            .forest-grid {
                grid-template-columns: 1fr;
                /* 超小螢幕顯示一列 */
            }
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
            padding: 10px 20px;
            font-size: 16px;
            background-color: #1f7300;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .button:hover {
            background-color: #185b00;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <a href="/" class="button">Back to MainPage</a>
        <h1>🌲已知的造林資料統整🌲</h1>

        <!-- 九宮格顯示 -->
        <div class="forest-grid">
            @foreach ($forests as $forest)
                <div class="forest-entry">
                    <table>

                        <th>
                            <h2>{{ $forest->farm_name }}<h2>
                        </th>
                        <tr>
                            <th><strong>平原森林面積 (公頃):</strong></th>
                            <th> {{ $forest->plain_forest_area_hectares }}</th>
                        </tr>
                        <tr>
                            <th><strong>公共森林面積 (公頃):</strong> </th>
                            <th>{{ $forest->public_forest_area_hectares }}</th>
                        </tr>
                        <tr>
                            <th><strong>自籌資金森林面積 (公頃):</strong></th>
                            <th>{{ $forest->self_funded_forest_area_hectares }}</th>
                        </tr>
                        <th><strong>生態森林公園面積 (公頃):</strong></th>
                        <th>{{ $forest->eco_forest_park_area_hectares }}</th>
                        </tr>
                        <tr>
                            <th><strong>總面積 (公頃):</strong></th>
                            <th> {{ $forest->total_area_hectares }}</th>
                        </tr>
                    </table>
                    <div class="divider"></div>

                </div>
            @endforeach
        </div>
        <div class="pagination">
            <!-- 顯示分頁的上一頁、下一頁等控制按鈕 -->
            {{ $forests->links() }}
        </div>
        

    </div>

</body>

</html>
