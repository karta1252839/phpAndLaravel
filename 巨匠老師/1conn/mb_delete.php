<?php
// 【學】 刪除留言 ()
require_once('../conn/conn.php');
include('../conn/assist.php');

$mb_id = $_GET['mb_id'];
$updateSQL = "DELETE FROM mb WHERE mb_id = $mb_id";
$result = mysqli_query($conn, $updateSQL);
header('Location:mb_index.php');

?>