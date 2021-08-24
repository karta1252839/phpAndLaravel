<?php
// 【學】 session功能 & 設定時區(不用重複打)

//啟動session功能
if( !isset($_SESSION) ){ session_start(); }
//設定時區
date_default_timezone_set('Asia/Taipei');

