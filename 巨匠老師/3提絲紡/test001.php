<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 【學】 SQL語法/QSL JOIN介紹/JS控制顯示文字/SQL & 連結判斷走向  -->
    <?php
    // (SELECT)二個資料合併，news取出全部，class_news取出其中一個class_news_name，(FROM)取news，(INSERT JOIN)將 class_news 合而為一，  並且 (ON)news的class_news_id等於class_news_id，(WHERE)則 news_focus 且 (ORDER BY) news_time (DESC)排序;
    $query_RS_news = " SELECT news.*, class_news.class_news_name
                            FROM news
                            INSERT JOIN class_news
                            ON news.class_news_id = class_news_id
                            WHERE news.news_focus=1
                            ORDER BY news.news_time DESC";

    // sql_join_各類
    // https: //www.w3schools.com/sql/sql_join_inner.asp
    ?>

    <script>
        // 控制顯示文字
        $('.new_content').each(function() {
            var id = $(this).attr('data-id');
            var len = 60;
            var txt = $(this).text().trim(); //取得新聞内容並去除字串前後的空白

            if (txt.length > len) {
                txt = txt.substr(0, len); //將內容自第一個字元取出要顯示的字數
            }
            // 將處理好內容加上指定的連結文字再送回原來的位置
            $(this).html(txt + '...<a href="index.php?page=news_detail.php&news_id=' + id + '" class="">閱讀詳細內容</a>');
        });
    </script>

    <!-- SQL & 連結判斷走向 -->
    <?php
    if (isset($_GET['w']) && $_GET['w'] == 'a') {
        // 顯示全部新聞
        $query_RS_news = " SELECT news.*, class_news.class_news_name
                            FROM news
                            INSERT JOIN class_news
                            ON news.class_news_id = class_news_id
                            ORDER BY news.news_time DESC";
    } else {
        // 顯示焦點新聞
        $query_RS_news = " SELECT news.*, class_news.class_news_name
                            FROM news
                            INSERT JOIN class_news
                            ON news.class_news_id = class_news_id
                            WHERE news.news_focus=1
                            ORDER BY news.news_time DESC";
    }
    ?>
    <?php if (isset($_GET['w']) && $_GET['w'] == 'a') { ?>
        <a href="inedx.php?page=news_index.php">焦點新聞</a>
    <?php } else { ?>
        <a href="inedx.php?page=news_index.php&w=a">全部新聞</a>
    <?php } ?>
    <a href="inedx.php?page=news_add.php">新增新聞</a>

</body>

</html>