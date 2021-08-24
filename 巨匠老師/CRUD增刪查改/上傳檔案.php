<?php
// CRUD 4-1. 檔案上傳的基本工作 =====================================================
if (isset($_FILES['uploadFile'])) {
  $uploadFile = $_FILES['uploadFile'];
  // echo $uploadFile; 會出現陣列
  print_r($uploadFile); //打印出現陣列 ###檢視原始碼可以比較好看
}
?>

<!-- CRUD 4-2. 檔案上傳的限制檢查 ===================================================== -->

<!-- html 的 enctype 加密類型 -->
<form action="" method="post" enctype="multipart/form-data"></form>
<?php

$file = $_FILES['upload_file']; //接收上傳檔案

$path = '../img_upload/';
if (!file_exists($path)) {  // file_exists檔案是否存在
  echo $path . '位置------不存在';
} else {
  echo $path . '位置------存在了';
}

$path2 = 'img_upload';
if (!file_exists($path2)) {
  mkdir($path2); // mkdir創建一個名為 $path2 的目錄：
}

//2.判斷上傳沒有錯誤時 => 檢查限制的條件 =============================================
if ($error == 0) {

  //搬移檔案
  $result = move_uploaded_file($tmp_name, $path . $file_name);
  echo '<br>---------檔案傳送' . $result;

  if (file_exists($path . $file_name)) {
    //拷貝檔案
    $result = copy($path . $file_name, $path2 . 'test' . $file_name);
    echo '<br>---------檔案拷貝' . $result;
    //刪除檔案
    $result = unlink($path . $file_name);
    echo '<br>---------檔案刪除' . $result;
  }
} else {
  //這裡表示上傳有錯誤, 匹配錯誤編號顯示對應的訊息
  switch ($error) {
    case 1:
      echo '上傳檔案超過 upload_max_filesize 容量最大值';
      break;
    case 2:
      echo '上傳檔案超過 post_max_size 總容量最大值';
      break;
    case 3:
      echo '檔案只有部份被上傳';
      break;
    case 4:
      echo '沒有檔案被上傳';
      break;
    case 6:
      echo '找不到主機端暫存檔案的目錄位置';
      break;
    case 7:
      echo '檔案寫入失敗';
      break;
    case 8:
      echo '上傳檔案被PHP程式中斷，表示主機端系統錯誤';
      break;
  }
}

// 3.判斷上傳檔案的大小
$max_size = 1024 * 1024;
if ($file_size > $max_size) {
  exit('上傳檔案過大，請選擇容量小於 1M 的檔案'); // exit 輸出訊息並且結束
}

//4.判斷檔案類型 ====================================
//取得檔案延伸的副檔名, 以下函數可以取得檔案延伸的副檔名
//pathinfo(上傳檔案的原來檔案名稱, PATHINFO_EXTENSION) 
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//in_array($ext, $allow_ext) 判斷 $ext變數的值 是否在 $allow_ext 這個陣列變數中
if (!in_array($ext, $allow_ext)) {
  exit('檔案類型不符合，請選擇 jpeg, jpg, png, gif 檔案');
}

if () {
  upload_ckeck($_FILES['uploadFile'],$path,$max_size,$allow_ext);
}

// CRUD 4-3. 限制檢查程式封裝成自定函式 =====================================================

// CRUD 4-4. 顯示已上傳的檔案＆刪除檔案 =====================================================

// CRUD 4-5. 圖檔上傳後製作影像縮圖 =====================================================

// 文件系统函数
pathinfo(); //返回文件路径的信息
basename(); // 返回路径中的文件名部分
// 相關GD 和圖像處理的函数
getimagesize(); //取得圖像尺寸資訊。
Imagecreatefromjpeg(); //返回一個末源像,還有 imagecreatefrompng ...
Imagecreatetruecolor(); //創建畫布。
imagecopyresampled(); //重新採樣拷員部分圖像並調整大小
imagejpeg(); //輸出圖像到指定位置指定名,還有 imagegif()、imagepng() ...
imagedestroy(); //放形除主概端暫存的團像。
imagesavealpha(); //#,定是否保持背景透明景·
imagecolorallocatealpha(); //定圖像分配含alpha透明的願色。
imagefill(); //設定圖像境满....。。

//  準備縮圖檔名
  $extname = pathinfo($filename,PATHINFO_EXTENSION);
//  運用getimagesize()取得圖像尺寸資訊
  $imgfileInfo = @getimagesize($fileFullName);


  // 判斷 走哪個路徑
switch ($data_type) {
  case 'insert':
      $query_str = "INSER INTO class_news (class_news_name) VALUES ($class_news_name)";
      break;
  case 'modify':
      $query_str = "UPDATE";
      break;
  case 'delete':
      $query_str = "DELECT FROM";
      break;

  default:
      # code...
      break;
}

// 準備影像 imagecreatefromjpeg(完整檔名) 返回一個來源圖像
$src_image = imagecreatefromjpeg($fileFullName);
// 創建畫布 imagecreatetruecolor(寬度, 高度)
$dst_image = imagecreatetruecolor($dst_w,$dst_h);


//決定縮圖大小
$dst_w = 200;
$dst_h = 200;

//計算來源的寬高比例, 再重新計算原圖依比例縮小的尺寸
$ratio_orig = $src_w / $src_h;

//如果目標的寬高比例>來源的寬高比例, 表示目標定義過寬, 否則表示目標定義過高
if ($dst_w / $dst_h > $ratio_orig) {
  $dst_w = $dst_h * $ratio_orig;      //以高度為基礎算出寬度
} else {
  $dst_h = $dst_w / $ratio_orig;      //以寬度為基礎算出高度
}

// CRUD 4-6. 製作縮圖程式封裝成自定函式 =====================================================

// imagealphablending(目標圖檔, 是否保持透明);
imagesavealpha($dst_image, true);
// CRUD 4-7. 新訊資料新增時圖檔的上傳工作 =====================================================

// 設計上傳檔案的預覽影像
?>
<script>
//準備上傳圖檔的預覽程式=====================
function preview(input) {
  //上一行的input是一個變數, 負責接收傳入的input物件
  //假如 input 接收到檔案是存在的, 並且接收到檔案不是空值
  if (input.files && input.files[0]) {
    //建立 reader 變數為一個檔案讀取器物件
    var reader = new FileReader();
    //因為讀取器的建立與整頁的讀取非同步進行, 所以得等待onload之後再.....
    reader.onload = function(e) {
      //準備顯示預覽圖的區域(也就是指定位置的img標籤)
      var resultArea = '#imgArea img';
      //將 e.target.result 也就是讀取器接收到的檔案名稱資訊, 
      //設定在img標籤的src屬性上, 那麼就會在指定位置顯示圖檔影像
      $(resultArea).attr('src', e.target.result);
    }
    //讀取器讀取檔案內容送到img的src
    reader.readAsDataURL(input.files[0]);
  }
}

//當按下 "上傳圖檔" 按鈕選擇了圖檔之後==========
$('#news_img').on('change', function() {
  //可以先測試選擇圖檔的input欄位接收到的val值
  //var fileName = $(this).val(); console.log(fileName);
  //將接收到圖檔的input交給preview這個function
  preview(this);
  $(this).parents('.w3-third').find('h2').remove();
});
</script>

<?php 
function sendMail($mailto,$name,$chkcode){

  $subject = "=?UTF-8?B?".base64_encode('TS緹絲坊網站會員功能啟用通知')."?=";

  $content = $name.'您好, 感謝申請會員<br>'
            .'TS緹絲坊網站會員功能啟用通知<br>'
            .'請點選<a href="localhost/TS_PHP_20200523/?page=mem_login&mailok=1&mem_mail='
            .$mailto.'&mem_chkcode='.$chkcode.'">此連結回覆確認信箱</a><br>'
            .'此信件為系統自動發送, 請勿點選回覆信件'; 

  $header = "From: server@gmail.com\r\n";
  $header .= "Content-type: text/html; charset=utf8";

  //mail(收件者,信件主旨,信件內容,信件檔頭資訊)
  $result = mail($mailto, $subject, $content, $header);
  return $result;
}
?>

<?php
  // 信箱改php smtp 20190518 011 影片
?>

<?php
// 迴圈資料集
  while ($row_RS_mem = mysqli_fetch_assoc($row_RS)) {

  }
  
?>
<script>
  $(selector).on(change, function () {
    
  });
</script>