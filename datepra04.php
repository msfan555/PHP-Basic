<h3>利用迴圈來計算連續五個周二的日期</h3>

<?php

$today = date("Y-m-d l");
echo $today;

echo "<br>";

$todaytime = strtotime(date("Y-m-d"));
// 把字串秒數算出來帶到$nextweek，根據此秒數家上下一週的秒數
$nextweek = strtotime("+1 week", $todaytime);

echo date("Y-m-d l", $nextweek);
?>
<hr>
<?php
// 快速產生很多週的結果
$n = 5;
for($i=0;$i<=$n;$i++){
$nextweek = strtotime("+1 week", $todaytime);
echo date("Y-m-d l", $nextweek)."<br>";

}

?>