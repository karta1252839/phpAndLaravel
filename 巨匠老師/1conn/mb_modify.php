<?php
// 【學】 修改留言 (SQL UPDATE/回首頁/做的次數順序/input:hidden)

require_once('../conn/conn.php');
include('../conn/assist.php');

//判斷是否來自表單送出了資料, 要更新資料 {{第二次近來做的}}============
if (isset($_POST['mb_name'])) {

    //接收表單輸入的資料
    $mb_name = $_POST['mb_name'];
    $mb_content = $_POST['mb_content'];

    // {{第二次近來 是抓不到一開始傳進來的 _GET}}
    $mb_id = $_POST['mb_id'];


    //組合更新資料庫這一筆記錄的語法 {{抓取二個後，要使用流水編號下去找哪一筆}}
    $updateSQL = "UPDATE mb SET mb_name = '$mb_name', 
                            mb_content = '$mb_content'
                            WHERE mb_id = $mb_id";
                            
    $result = mysqli_query($conn, $updateSQL);
    header('Location:mb_index.php');
}

// {{第一次近來，第二次近來是不做的}}
$mb_id = $_GET['mb_id'];
// 只抓取那ID
$sql_str = "SELECT * FROM mb WHERE mb_id = $mb_id";
$RS_mb = mysqli_query($conn, $sql_str);
$num_RS_mb = mysqli_num_rows($RS_mb);
// 從 mysql取值到php 單筆(自己寫的認知)
$row_RS_mb = mysqli_fetch_assoc($RS_mb);

mysqli_free_result($RS_mb);
mysqli_close($conn);
?>

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


<h1>修改 [<?php echo $mb_id; ?>] 留言</h1>

<form method="post" action="mb_index.php" class="mbForm" name="mbForm">
    <input type="text" name="mb_name" maxlength="20" required placeholder="請輸入留言者姓名" value="<?php echo $row_RS_mb['mb_name']; ?>">
    <textarea name="mb_content" rows="5" required placeholder="請輸入留言內容....."><?php echo $row_RS_mb['mb_content']; ?></textarea>
    <!-- {{接收下來給第二次使用，且隱藏}} -->
    <input type="hidden" name="mb_id" value="<?php echo $row_RS_mb['mb_id']; ?>">

    <input type="submit" value="確定更新留言">
    <input type="reset" value="清除留言">
</form>

<?php   ?>