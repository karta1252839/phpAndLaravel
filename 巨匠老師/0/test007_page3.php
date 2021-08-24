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
    if (isset($_GET['TSname']) && $_GET['TSname'] != '') {
        $TSname = $_GET['TSname'];
        $TSlove = $_GET['TSlove'];
        echo $TSname . "剛剛說喜歡" . $TSlove;
    }

    if (isset($_POST['TSname']) && $_POST['TSname'] != '') {
        $TSname = $_POST['TSname'];
        $TSlove = $_POST['TSlove'];
        echo $TSname . "剛剛說喜歡" . $TSlove;
    }


    echo '<br>';
    echo '<hr>';
    ?>

    <?php
    // 【_SESSION接收】PHP環境保險庫(有生命週期) 順序反過來寫

    // # _SESSION這邊就不用再接收了
    // $TSusername = $_POST['TSusername'];
    // $_SESSION['TSusername'] = $TSusername;

    if (isset($_SESSION['TSusername'])) {
        # code...
        echo "歡迎" . $_SESSION['TSusername'] . '登入!<br>';
    }



    ?>

    <a href="./test007_form.php">回首頁</a>




</body>

</html>