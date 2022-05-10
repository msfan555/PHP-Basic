<h3>利用date()函式的格式化參數，完成以下的日期格式呈現</h3>
<hr>
<?= date_default_timezone_set("Asia/Taipei"); ?>
<?= date("Y/m/d"); ?>
<hr>
<?= date("n月j日 l"); ?>
<hr>
<?= date("Y-n-j G:") . (int)date("i") . ":" . (int)date("s"); ?>
<!-- 沒有參數可以顯示沒有前導0的分鐘和秒數，所以利用字串轉為數字的方式來顯示 -->
<hr>
<?= date("Y-n-j H:i:s"); ?>
<hr>
<?php
$workday = "";
$w = date("w");
if ($w == 0 || $w == 6) {
    $workday = "假日";
} else {
    $workday = "工作日";
}
echo date("今天是西元Y年n月j日 ") . $workday;

?>