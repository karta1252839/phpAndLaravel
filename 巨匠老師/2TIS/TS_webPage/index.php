<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <title>TS緹絲坊</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!--  -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <!-- <script src="/2TIS/js/js/jquery-3.4.1.min.js"></script> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--  -->
    <script src="/2TIS/js/slick/slick.js"></script>
    <link rel="stylesheet" href="/2TIS/js/slick/slick-theme.css">
    <link rel="stylesheet" href="/2TIS/js/slick/slick.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/2TIS/css/layout.css">
    <link rel="stylesheet" href="/2TIS/css/index.css">
</head>

<body>

    <header>
        <div class="container">
            <a href="javascript:;"><img src="/2TIS/img/logo.png" alt=""></a>
            <div class="login-info">
                <!-- 登入者資訊 -->
            </div>
            <form class="search-form" method="get" action="">
                <input type="hidden" name="page" value="news-search">
                <input type="text" name="search-word" required>
                <input type="submit" value="搜尋商品">
            </form>
            <div class="cart-info">
                <!-- 購物車資訊 -->
            </div>
        </div>
    </header>
    
    <nav class="w3-grey">
        <div class="w3-bar w3-center show-d">
            <a class="w3-button" href="index.php?page=about.php">關於緹絲坊</a>
            <a class="w3-button" href="index.php?page=mb_index.php">問談區</a>
            <a class="w3-button" href="index.php?page=news_index.php">新訊區</a>
            <a class="w3-button" href="index.php?page=mem_index.php">會員中心</a>
            <a class="w3-button" href="index.php?page=prod_index.php">購物中心</a>
            <a class="w3-button" href="index.php?page=mem_login.php">登入 / 註冊</a>
        </div>

        <div class="w3-bar w3-center show-m">
            <a href="javascript:void(0)" class="w3-button w3-right">
                <i class="fa fa-bars"></i>
            </a>
            <span class="w3-show-inline-block w3-padding">TS 緹絲坊 MENU</span>
        </div>

        <div class="demo w3-bar-block w3-center show-m">
            <a class="w3-bar-item" href="TS_webpage/?page=about.php">關於緹絲坊</a>
            <a class="w3-bar-item" href="TS_webpage/?page=mb_index.php">問談區</a>
            <a class="w3-bar-item" href="TS_webpage/?page=news_index.php">新訊區</a>
            <a class="w3-bar-item" href="TS_webpage/?page=mem_index.php">會員中心</a>
            <a class="w3-bar-item" href="TS_webpage/?page=prod_index.php">購物中心</a>
            <a class="w3-bar-item" href="TS_webpage/?page=mem_login.php">登入 / 註冊</a>
            <a class="w3-bar-item" href="TS_webpage/mem_logout.php">登出</a>
        </div>
    </nav>

    <div class="main">

        <div class="container">
            <h1>最新商品特賣</h1>

            <div class="prod-list row">
                <div class="prod-item col">
                    <div>
                        <p class="word-area">[30]法式美人浪漫點點網紗蕾絲滾邊婚禮洋裝</p>
                        <a href=""><img src="/2TIS/img/A1.jpg" width="100%" alt=""></a>
                        優惠特價:890
                    </div>
                </div>
                <div class="prod-item col">
                    <div>
                        <p class="word-area">[11]V領露背層次雪紡斗篷上衣</p>
                        <a href=""><img src="/2TIS/img/A2.jpg" width="100%" alt=""></a>
                        優惠特價:299
                    </div>
                </div>
                <div class="prod-item col">
                    <div>
                        <p class="word-area">[9]一字領層次荷葉洋裝</p>
                        <a href=""><img src="/2TIS/img/A3.jpg" width="100%" alt=""></a>
                        優惠特價:399
                    </div>
                </div>
                <div class="prod-item col">
                    <div>
                        <p class="word-area">[8]V領拼接荷葉無袖雪紡上衣</p>
                        <a href=""><img src="/2TIS/img/A4.jpg" width="100%" alt=""></a>
                        優惠特價:299
                    </div>
                </div>
                <div class="prod-item col">
                    <div>
                        <p class="word-area">[7]鏤空織紋針織小外套</p>
                        <a href=""><img src="/2TIS/img/A5.jpg" width="100%" alt=""></a>
                        優惠特價:280
                    </div>
                </div>
                <div class="prod-item col">
                    <div>
                        <p class="word-area">[3]素色粗針織長版開襟外套</p>
                        <a href=""><img src="/2TIS/img/A6.jpg" width="100%" alt=""></a>
                        優惠特價:630
                    </div>
                </div>
            </div>

            <h1 style="margin-top:50px">最新訊息公告</h1>

            <div class="news-list">

                <div class="news-item w3-row">
                    <div class="w3-col s12 m3 l2">
                        <a href="TS_webpage/?page=news_detail">
                            <img src="/2TIS/img/B1.png" alt=""> </a>
                    </div>
                    <div class="w3-col s12 m9 l10">
                        <h3>[6]頭痛該吃止痛藥嗎？腦神經內科破解4大常見迷思</h3>
                        <h4 class="w3-row">
                            <span class="w3-col s4">新訊分類:健康</span>
                            <span class="w3-col s4">2020-11-06 18:07:52</span>
                        </h4>
                        <div class="news-content">
                            我在門診中看過各式各樣的病人長期飽受頭痛困擾，其中有件事我想特別提出來跟大家分享，就是「吃止痛藥」這件事，我發現大家對止痛藥似乎都有些誤解，今天要來幫大家破解謠言。

                            誤解一：止痛藥能吃嗎？是不是 ......<a class="w3-button w3-text-blue" href="">閱讀詳細內容</a>
                        </div>
                    </div>
                </div>
                <div class="news-item w3-row">
                    <div class="w3-col s12 m3 l2">
                        <a href="TS_webpage/?page=news_detail">
                            <img src="/2TIS/img/B2.png" alt=""> </a>
                    </div>
                    <div class="w3-col s12 m9 l10">
                        <h3>[21]最低只要「銅板」價！端午連假玩樂園享超低價門票</h3>
                        <h4 class="w3-row">
                            <span class="w3-col s4">新訊分類:生活</span>
                            <span class="w3-col s4">2020-06-28 03:17:53</span>
                        </h4>
                        <div class="news-content">
                            端午連假即將來臨，全台遊樂園紛紛推出優惠活動吸引民眾，搶攻旅遊商機。六福村推出生日數字優惠，出生日含「5」，就能以555元入園，陪同友人只需55元，劍湖山則是憑健保卡左下角的序號中限定3數字，票價只需
                            ......<a class="w3-button w3-text-blue" href="">閱讀詳細內容</a>
                        </div>
                    </div>
                </div>
                <div class="news-item w3-row">
                    <div class="w3-col s12 m3 l2">
                        <a href="TS_webpage/?page=news_detail">
                            <img src="/2TIS/img/B3.png" alt=""> </a>
                    </div>
                    <div class="w3-col s12 m9 l10">
                        <h3>[22]把握最強改運日！專家傳授端午靠「這味」扭轉衰運</h3>
                        <h4 class="w3-row">
                            <span class="w3-col s4">新訊分類:生活</span>
                            <span class="w3-col s4">2020-06-28 03:17:07</span>
                        </h4>
                        <div class="news-content">
                            端午節除了吃粽子、立蛋，拜祖先、神明。這天是陽氣最旺的日子，所以端午節也被視為最強「改運」好時機，很多人會趁當天為自己轉運，專家指出，以「鹼粽」作為供品就能有轉運的效果，且粽子的數量也是關鍵之一。
                            ......<a class="w3-button w3-text-blue" href="">閱讀詳細內容</a>
                        </div>
                    </div>
                </div>
                <div class="news-item w3-row">
                    <div class="w3-col s12 m3 l2">
                        <a href="TS_webpage/?page=news_detail">
                            <img src="/2TIS/img/B4.png" alt=""> </a>
                    </div>
                    <div class="w3-col s12 m9 l10">
                        <h3>[11]中職／獅隊6轟狂掃悍將隊 改寫隊史單場紀錄</h3>
                        <h4 class="w3-row">
                            <span class="w3-col s4">新訊分類:運動</span>
                            <span class="w3-col s4">2020-06-28 03:16:01</span>
                        </h4>
                        <div class="news-content">
                            統一獅隊今晚在新莊棒球場砲火隆隆，以改寫隊史紀錄的單場6轟，13：4擊敗富邦悍將隊，戰績雖仍墊底，僅落後悍將隊0.5場勝差。

                            蘇智傑在首局上先轟兩分砲，個人連續3場比賽全壘打，本季累積18支全壘 ......<a class="w3-button w3-text-blue" href="">閱讀詳細內容</a>
                        </div>
                    </div>
                </div>
                <div class="news-item w3-row">
                    <div class="w3-col s12 m3 l2">
                        <a href="TS_webpage/?page=news_detail">
                            <img src="/2TIS/img/B5.png" alt=""> </a>
                    </div>
                    <div class="w3-col s12 m9 l10">
                        <h3>[13]MLB／達比修有新魔球 150公里球速讓田中也吃驚</h3>
                        <h4 class="w3-row">
                            <span class="w3-col s4">新訊分類:運動</span>
                            <span class="w3-col s4">2020-06-28 03:08:21</span>
                        </h4>
                        <div class="news-content">
                            小熊隊日本投手達比修有防疫期間練出新球種，據稱球速能到150公里，達比修有不只在推特上秀出自己投球的片段，更邀請球迷幫新球種命名。

                            達比修有疫情階段持續鍛鍊，17日先向球迷公告新練了一顆介於指叉 ......<a class="w3-button w3-text-blue" href="">閱讀詳細內容</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <a href="/2TIS/TS_webPage/about.php"></a>

    <!--  -->
    <div id="main" class="container">

        <?php

        if (isset($_GET['page']) && $_GET['page'] != '') {
            $page = $_GET['page'];
            include('/2TIS/TS_webPage/' . $page);
        } else {
            include('/2TIS/TS_webPage/index_content.php');
        }

        ?>

    </div>

    <footer>
        <p>

        <p>網站至今瀏覽人數: 共有 2202 位訪客
            (今年 1674 人,本月 360 人,
            今日 10 人)</p>
        </p>

        Copyright © 2015, Update @2020 TS緹絲坊 |
        <a href="TS_webpage/?page=service"> 【客服中心】 </a> |
        Design/Maintain by <a href="mailto:tsuiling1020@gmail.com">TS</a> <br>
        ( 網站設計模擬練習用, 相關影像資訊來自<a href="https://www.tokichoi.com.tw/" target="_blank">tokichoi</a>網站, 如有侵權敬請告知, 即刻刪除處理)

    </footer>


    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="js/all.js"></script>
    <script src="js/index.js"></script>
</body>

</html>