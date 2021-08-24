<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 【學】 form 接收 -->
    <?php
    // _GET & _POST 接收過來的name一樣時判斷
    // isset 是否存在
    // 【一般變數接收】
    if (isset($_GET['TSname']) && $_GET['TSname'] != '') {
        $TSname = $_GET['TSname'];
        $TSlove = $_GET['TSlove'];
    }

    if (isset($_POST['TSname']) && $_POST['TSname'] != '') {
        $TSname = $_POST['TSname'];
        $TSlove = $_POST['TSlove'];
        echo $TSname . "說喜歡" . $TSlove;
    }

    echo '<br>';
    echo '<hr>';
    ?>

    <br>
    <!-- GET方式 -->
    <a href="./test007_page3.php?TSname=<?php echo $TSname; ?>&TSlove=<?php echo $TSlove; ?>">前往page3</a>

    <?php
    echo '<br>';
    // 【_SESSION接收】PHP環境保險庫(有生命週期) 順序反過來寫
    // 有使用_SESSION必須開頭啟動
    // 如果要消失只有二種 1.24分鐘停滯壽命 2.瀏覽器全關

    // #前一頁是用post 所以先用post收在轉換到_SESSION
    $TSusername = $_POST['TSusername'];
    $_SESSION['TSusername'] = $TSusername;
    if ( isset($_SESSION['TSusername']) ) {
        echo '歡迎' . $_SESSION['TSusername'] . '登入!<br>';
    }
    ?>

</body>

</html>