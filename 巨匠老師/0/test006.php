<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 【學】 array+foreach(二種) -->
    <?php
    date_default_timezone_set('Asia/Taipei');
    $nowY = date('Y');
    $nowM = date('m');
    $nowD = date('d');
    $nowW = date('w');
    $nowH = date('H');
    $nowI = date('i');
    $nowS = date('s');

    $wArray = array('日', '一', '二', '三', '四', '五', '六');
    $nowW = $wArray[$nowW];

    $weekStr = $nowY . '年' . $nowM . '月' . $nowD . '日,星期' . $nowW . ' ' . $nowH . ':' . $nowI . ':' . $nowS . '';
    echo $weekStr;

    echo '<hr>';

    $str = '一個星期有:';
    // foreach(索引式)
    foreach ($wArray as $key => $week) {
        # code...
        if ($key == 0) {
            # code...
            $str = $str . ' 星期' . $week;
        } else {
            $str = $str . ', 星期' . $week;
            # code...
        }
    }
    echo $str;

    echo '<hr>';
    ?>


    <?php
    $a1=['Amy'=>'PHP','Ice'=>'WORD','Mary'=>'動畫'];
    // foreach(關聯式)
    foreach ($a1 as $label => $value) {
        # code...
        echo $label."書櫃裡有".$value.' 書<br>';
    }
    ?>
</body>

</html>