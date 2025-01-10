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
        /**/
        /* 網頁背景 */
        body {
            background-image: url("{{ URL::asset('Img/sectionbg.png') }}");
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
            overflow: hidden;
        }

        .leafflake {
            position: absolute;
            top: -10px;
            color: #ffffff;
            font-size: 24px;
            user-select: none;
            pointer-events: none;
            animation: fall 10s linear infinite, drift 5s ease-in-out infinite;
            z-index: -2;
            opacity: 40%;
            /* 确保雪花背景不会覆盖其他内容 */
        }

        @keyframes fall {
            0% {
                top: -10px;
            }

            100% {
                top: 100vh;
                /* 滑动到页面底部 */
            }
        }

        /* 雪花左右漂移动画 */
        @keyframes drift {
            0% {
                transform: translateX(0);
                /* 从初始位置开始 */
            }

            50% {
                transform: translateX(10px);
                /* 向右漂移，限制漂移范围 */
            }

            100% {
                transform: translateX(-10px);
                /* 向左漂移，限制漂移范围 */
            }
        }

        /* 頁首 */
        .header-container {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #176902;
            z-index: 999;
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

        .dense_tree {
            position: absolute;
            /* 使用絕對定位 */
            margin: -58px;
            width: 16%;
            height: 16%;
            transform: scaleY(-1);
            z-index: -1;

            /* 讓樹叢圖片保持在內容的下面，不會擋住頁面其他區域 */
        }

        .left {
            left: 0;
            top: 7%;
            /* 設定離頁面頂部的距離，避免和標籤區域重疊 */
        }

        .right {
            right: 0;
            top: 7%;
            /* 讓右側的樹叢也同樣避免遮擋頂部區域 */
        }
        .login-color{
            background-color: rgb(7, 12, 54);
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
            <div class="container">
                <ul class="login-color">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
    <img src="{{ URL::asset('Img/densetrees.png') }}" class="dense_tree left">
    <img src="{{ URL::asset('Img/densetrees.png') }}" class="dense_tree right">
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
<script>
    // 在页面加载时生成雪花元素
    let leafflakesCount = 15;
    for (let i = 0; i < leafflakesCount; i++) {
        let leafflake = document.createElement('div');
        leafflake.classList.add('leafflake');
        leafflake.innerHTML = "🍃";

        // 随机决定雪花生成在左侧10%或右侧10%的位置
        if (Math.random() < 0.5) {
            leafflake.style.left = Math.random() * (window.innerWidth * 0.08) + 'px';
        } else {
            leafflake.style.left = window.innerWidth * 0.9 + Math.random() * (window.innerWidth * 0.08) + 'px';
        }

        // 随机设置每个雪花的动画持续时间，制造更自然的效果
        leafflake.style.animationDuration = Math.random() * 10 + 5 + 's';

        // 随机设置每个雪花的漂移速度
        leafflake.style.animationDelay = Math.random() * 5 + 's';

        document.body.appendChild(leafflake);
    }
</script>



</html>
