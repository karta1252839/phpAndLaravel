<?php
// 【學】 連接資料庫(不用重複打)

$db_hostname = "localhost";       //資料庫主機名稱
$db_name     = "app";           //使用的資料庫
$db_username = "root";            //登入資料庫的管理者的帳號
$db_password = "123456789";       //登入密碼

//連線資料庫 (伺服器主機名稱，登入旳管理者名稱，登人的密碼，資料庫名稱)
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

//假如連線資料庫沒有成功，則顯示錯誤訊息，並且結束離開PHP不再繼續往下執行
if (!$conn) {
    printf("連線資料庫失敗: %s\n", mysqli_connect_error());
    exit();
}
//echo      輸出，沒有傳回值
//print()   輸出，有傳回值，正常輸出傳回true
//printf()  將文字格式化以後輸出，格式化參數 %s 表示字串，帶入逗號後面的結果
//sprintf() 將文字格式化以後不輸出，而是記錄儲存在變數上，格式化方式雷同printf()

//設定透過連線傳送資料的編碼
mysqli_set_charset($conn, "utf8");

//mysqli_close($conn); //關閉資料庫的連線
