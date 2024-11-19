<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDGS-永續發展 team04</title>
    <style>
        * {

            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* 網頁背景 */
        body {
            background-image: url("{{ URL::asset('Img/sectionbg.png') }}");
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        /* 頁首 */
        .header-container {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #176902;
        }

        header {
            font-size: 24px;
            font-weight: bold;
            margin-right: auto;
            color: antiquewhite;
        }


        nav {
            display: flex;
            gap: 20px;
        }

        nav a {
            text-decoration: none;
            color: antiquewhite;
        }

        nav a:hover {
            color: rgb(214, 201, 184);
        }



        .main-content {


            max-width: auto;
            margin: 0 10%;
            padding: 20px;
        }


        .section-title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .section-subtitle {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
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


        .section1 {
            background-color: #f0f9e48a;
            padding: 70px 20px;
            margin-right: auto;
            margin-bottom: 10px;
            max-width: auto;
            border-bottom: 2px solid;
        }

        .section2 {
            background-color: #f0f9e48a;
            padding: 40px 20px;
            border-bottom: 2px solid;
            max-width: auto;
        }
    </style>
</head>

<body>

    <!-- 頁面頂部 -->
    <div class="header-container">
        <header>SDGS-永續發展 team04</header>
        <nav>
            <a href="/">首頁</a>
            <a href="sdgs">關於SDGS</a>
            <a href="forest">🌲林地資料🌲</a>
        </nav>
    </div>

    <!-- 主要內容區域-->
    <div class="main-content">
        <div class="section1">
            <img src="https://green.nttu.edu.tw/var/file/48/1048/img/SDGs.png" style="width: 25%;float: right;" />
            <h2 class="section-title">永續發展目標簡介</h2>

            <p><strong>聯合國在2015年提出了2030永續發展目標，設立了17項全球性的永續發展目標，
                    <br>核心目標是共同創造「每個國家都要共同投入，包含永續的經濟增長與教育機會，讓所有人都有工作」的世界。</strong></p>
            <br>

            <a href="sdgs" class="button">點擊閱讀更多</a>
        </div>

        <div class="section2">
            <p class="section-subtitle">Sdgs-15 陸域生態</p>
            <h2 class="section-title">🌲造林土地資訊</h2>

            <p><strong>整理了各地區林地的造林資訊與農業用地整治的數據性地圖資料。<strong></p>
            <br>
            <a href="forest" class="button">點擊查看詳細資訊</a>
        </div>
    </div>
    
</body>

</html>
