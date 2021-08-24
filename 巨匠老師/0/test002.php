<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 【學】符號:物件接起來、function變數 -->
    <?php
    $m1 = 100;
    $m2 = 1000;
    $s1 = '元';
    echo "員工-時新" . $m1 . $s1;
    // echo "員工-時新" . $m1 . $s1;

    // 把物件接起來的符號"."
    function run1()
    {
        // global $m1, $s1;
        $m1 = $m1 * 8;
        echo "<br>員工一日薪水" . $m1 . $s1;
    }
    run1();
    echo "<hr>";

    function run2($moneyHour)
    {
        $moneyHour *= 8;
        return $moneyHour;
    }
    // $result 是之後還要再用所以存的
    $result = run2($m1);
    echo '<br>員工一日薪水' . $result;
    $result = run2($m2);
    echo '<br>員工一日薪水' . $result;

    echo '<hr>';

    ?>
</body>

</html>