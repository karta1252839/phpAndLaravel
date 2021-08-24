<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 【學】 ajax技術 -->
    <script>
        $(function() {

            //當#showClassNews按鈕被點選時==================
            $('#showClassNews').click(function() {
                //運用ajax技術

                $.ajax({
                    //呼叫 admin_news_class_show.php 協助處理，負責查詢出資料
                    url: './admin_news_class_show.php'

                    //當完成 admin_news_class_show.php 檔案的工作之後
                    //繼續進行以下function
                    //變數result負責接收 admin_news_class_show.php 回傳的資料
                }).done(function(result) {
                    //將接收到的資訊，顯示到.class_news_list這個區塊之內
                    $('.class_news_list').html(result);
                });
                //完成以上之後，顯示出#newsClassArea這個區塊
                $('#newsClassArea').show();
            });

        });

        //當#showClassNews按鈕被點選時==================
        function manage_news_class(obj) {
            //先取得需要的資料
            var $type = $(obj).attr('data-type'); //得到的資訊是為了分辨insert新增、update修改、delete刪除
            var $news_class_name = $(obj).parent().find('.class_val').val(); //輸入的分類名稱
            var $news_class_id = $(obj).parent().find('.class_val').attr('data-id'); //修改或刪除時需要的id值

            if ($type == 'delete') {
                if (!confirm('刪除後不能還原！確定刪除嗎？')) {
                    return; //表示接下來的程式不執行了, 回到呼叫這個function的位置
                }
            }
            //接著運用ajax技術
            $.ajax({
                //呼叫 news_class_manage.php協助處理，負責新增、修改、刪除等功能
                url: './admin_news_class_manage.php'
                    //以post的方法將以下資料傳入news_class_manage.php檔案
                    ,
                type: 'post',
                data: {
                    type: $type //負責辨別要處理新增或修改或刪除
                        ,
                    news_class_name: $news_class_name //輸入的分類名稱
                        ,
                    news_class_id: $news_class_id //修改或刪除時需要的id值
                }
            }).done(function(result) {
                //自動觸發關閉按鈕
                $('#newsClassArea .w3-modal-close').trigger('click');
                //將接收到資料送到.select_class_news這個區塊內顯示
                $('.select_news_class').html(result);
            });
        }
    </script>


    <?php

    ?>

</body>

</html>