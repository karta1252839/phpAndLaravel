<?php
// 【學】 留言板 (引入檔案/SQL語法/while實例/nl2br換行/javascript刪除/)

//連線資料庫
//require()負責引入檔案，require_once()也是引入檔案但會先檢查是否已引入可避免重複引入
//include()負責引入檔案，include_once()也是引入檔案但會先檢查是否已引入可避免重複引入
//include()如果有誤時不會停下來，會繼續往下執行，可以使用在內容區、重覆使用的迴圈中
//require()如果有誤時會終止程式，頁面不會再往下執行，通常是用在頁面上方一開始的工作
require_once('../conn/conn.php');   //conn.php檔案負責連線資料庫
include('../conn/assist.php');      //assist.php檔案負責時區設定與session功能啟動
// include('../shared/assist.php');     
//目前沒有需要時區及session功能, 所以 assist.php 檔案也可以不引入

//判斷是否要新增資料===========================================
//假如收到來自留言牆表單的資料===>新增資料到資料庫
if (isset($_POST['mb_name'])) {
    //接收到表單傳來的資料------------------------
    $mb_name    = $_POST['mb_name'];
    $mb_content = $_POST['mb_content'];

    //存回資料庫--------------------------------
    //以變數$sql_str先記錄要求資料庫做事的語法
    //-SQL語法--新增進去  mb資料表  (欄位1, 欄位2....) VALUES ( 值1, 值2 ..... )
    $sql_str = "INSERT INTO mb (mb_name, mb_content) 
                        VALUES ('$mb_name', '$mb_content')";
    // $sql_str = "INSERT INTO `mb`(`mb_name`, `mb_content`) 
    //             VALUES ($mb_name,$mb_content)";

    //透過$conn的連結, 將上述語法帶入資料庫執行
    $result = mysqli_query($conn, $sql_str);
    //前往指定頁面
    header('Location:mb_index.php');
}

//查詢資料表mb所有資料===========================================
//以變數$sql_str先記錄要求資料庫做事的語法
/*
SELECT 選擇欄位  (*代表全部欄位)
FROM 資料表
ORDER BY 依據指定欄位排序  (ASC 由小到大, DESC 由大到小)
*/
$sql_str = "SELECT * 
            FROM mb 
            ORDER BY mb_time DESC";

//透過$conn的連結, 將上述語法帶入資料庫執行
$RS_mb = mysqli_query($conn, $sql_str);  //執行完之後得到「資料集」

print_r($RS_mb);  //輸出陣列資料

//運用mysli_num_rows()函數計算資料集的筆數
$num_RS_mb = mysqli_num_rows($RS_mb);

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            max-width: 1200px;
            margin: 20px auto;
            color: #000;
        }

        form {
            width: 700px;
            margin: 20px auto;
        }

        input,
        textarea {
            display: block;
            width: 100%;
            margin: 5px;
            font-size: 16px;
            padding: 5px;
        }

        h1 {
            text-align: center;
        }

        h2 {
            background-color: lightgray;
            padding: 5px;
            font-size: 16px;
        }

        p {
            margin: 10px;
        }

        .block {
            background-color: #afe2f7;
            margin: 20px 0;
        }
    </style>
    <title>Document</title>
</head>

<body onclick="alert('321');">
    <h1>留言牆</h1>

    <form method="post" action="mb_index.php" class="mbForm">
        <input type="text" name="mb_name" maxlength="20" required placeholder="請輸入留言者姓名">
        <textarea name="mb_content" rows="5" required placeholder="請輸入留言內容....."></textarea>
        <input type="submit" value="確定新增留言">
        <input type="reset" value="清除重寫">
    </form>


    <!-- =========== 以下是在表單的下方顯示留言內容 ============== -->
    <h2><?php echo '目前留言筆數：' . $num_RS_mb . '筆'; ?></h2>

    <!-- 從 mysql取值到php 多筆while迴圈出(自己寫的認知) -->
    <?php while ($row_RS_mb = mysqli_fetch_assoc($RS_mb)) { ?>
        <br>
        <?php echo '第' . $row_RS_mb['mb_id'] . '筆'; ?>
        <br>
        <p>
            留言者：<?php echo $row_RS_mb['mb_name']; ?>@<?php echo $row_RS_mb['mb_time']; ?>

            <a href="mb_modify.php?mb_id=<?php echo $row_RS_mb['mb_id']; ?>">修改</a>
            <!-- javascript刪除 -->
            <a href="javascript:if( confirm('刪除後不能還原!!\n\n\您確定刪除嗎??') ){
                        window.location.href = 'mb_delete.php?mb_id=<?php echo $row_RS_mb['mb_id']; ?>'; }" onclick="alert('123');">刪除</a>
        </p>
        <p>
            內 容：<?php echo nl2br($row_RS_mb['mb_content']); ?>
        </p>

        <hr>
    <?php  } ?>

    目前沒有資料

    <script>

    </script>
</body>

</html>