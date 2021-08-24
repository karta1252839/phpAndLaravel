<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 【學】 -1或有收到/LIMIT(取0開始到，5個資料)/判斷html預設/ -->
    <?php
    // -1或有收到
    $news_id = -1;
    if (isset($_GET['news_id']) && $_GET['news_id'] != '') {
        $news_id = $_GET['news_id'];
    }
    $query_RS_news = " SELECT news.*, class_news.class_news_name
                        FROM news
                        INSERT JOIN class_news
                        ON news.class_news_id = class_news_id
                        WHERE news.news_id=$news_id";

    // LIMIT 取0開始到，5個資料  ===============
    $query_RS_news_new = " SELECT * FROM news ORDER BY news_time DESC LIMIT 0,5";

    ?>
    <!-- 判斷html預設 (checked) =============== -->
    <label><input type="radio" name="news_focus" required value="1"
            <?php if ($row_RS_news['news_focus'] == 1) { echo "checked"; } ?> >焦點新聞</label>
    <label><input type="radio" name="news_focus" required value="2"
            <?php if ($row_RS_news['news_focus'] == 2) { echo "checked"; } ?> >非焦點新聞</label>
</body>

</html>