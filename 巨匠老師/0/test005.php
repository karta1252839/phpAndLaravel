<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 【學】 while+do 迴圈 -->
    <?php
    $i = 1;
    $value = rand(1, 9);
    $result = '抽到' . $value;
    while ($value != 4) {
        $i++;
        $value = rand(1, 9);
        $result .= ',抽到' . $value;
    }

    $result .= ',恭喜!!!總共抽了' . $i . '次';
    echo $result;

    echo '<br>';
    echo '<hr>';
    ?>
    <?php
        do {
            # code...
        } while ($a <= 10);
    ?>
</body>

</html>