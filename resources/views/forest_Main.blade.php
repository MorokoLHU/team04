<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDGS-永續發展 team04</title>
    <style>
        /* 通用重置樣式 */
        * {
            
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* 網頁背景和字體樣式 */
        body {
            background-image: url("{{URL::asset('Img/sectionbg.png')}}");
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        /* 頁首樣式 */
        .header-container {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #176902;
        }

        header {
            font-size: 24px;
            font-weight: bold;
            margin-right: auto; /* 讓 header 靠左，nav 靠右 */
            color:antiquewhite;
        }

        /* 頁面頂部導覽連結樣式 */
        nav {
            display: flex;
            gap: 20px;
        }

        nav a {
            text-decoration: none;
            color:antiquewhite;
        }

        nav a:hover {
            color:rgb(214, 201, 184);
        }

        /* 主要內容區樣式，左對齊 */
        .main-content {
            
          
            max-width: auto;
            margin: 0 20%;
            padding: 20px;
        }

        /* 區塊標題樣式 */
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

        /* 按鈕樣式 */
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

        /* 區塊樣式，整個區塊右對齊 */
        .section1 {
            background-color: #f0f9e48a;
            padding: 40px 20px;
            margin-right: auto; /* 讓整個區塊靠右 */
            margin-bottom: 10px;
            max-width: auto; /* 限制區塊的寬度 */
            border-bottom: 2px solid ;
        }
        .section2 {
            background-color: #f0f9e48a;
            padding: 40px 20px;
            border-bottom: 2px solid ;
            max-width: auto; /* 限制區塊的寬度 */
        }

        /* 響應式設計，適應小螢幕 */
        @media (max-width: 768px) {
            .section-title {
                font-size: 24px;
            }

            .section-subtitle {
                font-size: 16px;
            }

            .button {
                font-size: 14px;
            }

            /* 讓 header 和 nav 在小螢幕上分行 */
            .header-container {
                flex-direction: column;
                align-items: flex-start;
            }

            nav {
                margin-top: 10px;
            }

            /* 移動設備上使區塊自適應寬度 */
            .main-content,
            .section {
                margin: 20px;
                max-width: 100%;
            }
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
            <a href="forest">林地資料</a>
        </nav>
    </div>

    <!-- 主要內容區域，靠左對齊 -->
    <div class="main-content">
        <div class="section1">
            <h2 class="section-title">永續發展目標簡介</h2>
          
            <p><strong>聯合國在2015年提出了2030永續發展目標，設立了17項全球性的永續發展目標，
                <br>核心目標是共同創造「每個國家都要共同投入，包含永續的經濟增長與教育機會，讓所有人都有工作」的世界。</strong></p>
                <br>
            <a href="sdgs" class="button">點擊閱讀更多</a>
        </div>
       
        <div class="section2">
            <p class="section-subtitle">Sdgs-4 陸域生態</p>
            <h2 class="section-title">造林土地資訊</h2>
            
            <p><strong>整理了各地區林地的造林資訊與農業用地整治的數據性地圖資料。<strong></p>
            <br>
            <a href="forest" class="button">點擊查看詳細資訊</a>
        </div>
    </div>

</body>

</html>
