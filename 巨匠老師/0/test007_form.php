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
    <!-- 【學】 form -->
    <h1>GET 表單</h1>

    <form name="form1" action="./test007_result.php" method="get">
        <!-- require 必填 -->
        <input type="text" name="TSname" require placeholder="請輸入姓名..." id="">
        <input type="text" name="TSlove" require placeholder="請輸入喜歡..." id="">

        <input type="submit" value="送出">
    </form>

    <h1>POST 表單</h1>

    <form name="form2" action="./test007_result.php" method="post">
        <!-- require 必填 -->
        <input type="text" name="TSname" require placeholder="請輸入姓名..." id="">
        <input type="text" name="TSlove" require placeholder="請輸入喜歡..." id="">

        <input type="submit" value="送出">
    </form>

    <h1>username 表單</h1>

    <form name="form3" action="./test007_result.php" method="post">
        <!-- require 必填 -->
        <input type="text" name="TSusername" require placeholder="請輸入帳號..." id="">
        <input type="password" name="TSpassword" require placeholder="請輸入密碼..." id="">

        <input type="submit" value="送出">
    </form>

    <?php
    if (isset($_SESSION['TSusername'])) {
        # code...
        echo "歡迎" . $_SESSION['TSusername'] . '登入!<br>';
    }
    ?>



    <?php
    $value = 100;
    $result = 1000;


    echo '<br>';
    echo '<hr>';

    ?>
</body>

</html>