<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 【學】if、日期 -->
    <?php
    $value = rand(1, 999);
    $result = '抽到的是:' . $value;
    if ($value % 2 == 0) {
        $result .= '偶數';
    } else {
        $result .= '奇數';
    }
    echo $result;
    echo '<hr>';

    // 日期
    date_default_timezone_set('Asia/Taipei');
    $now = date('Y-m-d D H:i:s');
    echo "目前主機時間:" . $now;

    $date = date('Y-m-d');
    $week = date('w');
    $time = date('A h:i:s');

    // 中文 週
    switch ($week) {
        case 0:
            $week = '日';
            break;
        case 1:
            $week = '一';
            break;
        case 2:
            $week = '二';
            break;
        case 3:
            $week = '三';
            break;
        case 4:
            $week = '四';
            break;
        case 5:
            $week = '五';
            break;
        case 6:
            $week = '六';
            break;

        default:
            # code...
            break;
    }

    echo "<br>目前主機時間:" . $date . ' 星期' . $week . ' ' . $time;
    ?>
</body>

</html>