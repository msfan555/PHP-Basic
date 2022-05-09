<h2>計算距離自己下一次生日還有幾天</h2>

<?php

$birthday = "01-08";
echo "你的生日是" . $birthday . "<br>";
// $now=strtotime('now');
$today = strtotime(date("Y-m-d"));
$mybirthday = strtotime(date("Y-") . $birthday);
$diff = 0;
$result = "";

if ($mybirthday - $today > 0) {
    $diff = floor(($mybirthday - $today) / (24 * 60 * 60));
    $result = "距離你的生日還有<span style='color:red'>" . $diff . "</span> 天";
} else if ($mybirthday - $today < 0) {
    $mybirthday = strtotime("+1 year", $mybirthday);
    $diff = floor(($mybirthday - $today) / (24 * 60 * 60));
    $result = "距離你的生日還有<span style='color:red'>" . $diff . "</span>天";
} else {
    $result = "Happy Birthday !!";
}

echo $result;


?>