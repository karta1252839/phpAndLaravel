<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 【學】迴圈 -->

    <?php
    // for
    $total = 0;
    for ($i = 0; $i <= 100; $i++) {
        # code...
        $total += $i;
        echo $i . '+';
    }
    echo "1加到100總和= " . $total;
    ?>

    <hr>

    <?php
    // for
    $total = 0;
    for ($i = 2; $i <= 100; $i += 2) {
        # code...
        $total += $i;
        echo $i . '+';
    }
    echo "1加到" . ($i - 2) . "的偶數和= " . $total;
    ?>
    
    <hr>

    <?php
    // while 迴圈+判斷(專門撈資料
    $total = 0;
    $i = 1;
    while ($i <= 100) {
        $total += $i;
        echo $i . '+';
        $i++;// ++放這(累加或三個就用for)
    }
    echo "1加到" . ($i - 2) . "的偶數和= " . $total;
    ?>
</body>

</html>