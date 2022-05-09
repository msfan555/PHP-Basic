<h2>給定兩個日期，計算中間間隔天數</h2>
<?php
$day1="2022-4-10";
$day2="2022-4-20";

echo "日期ㄧ=>".$day1."<br>";
echo "日期二=>".$day2."<br>";

$time1=strtotime($day1);
$time2=strtotime($day2);

echo $time1;
echo "<br>";
echo $time2;

echo "<hr>";

$gap=($time2-$time1-(24*60*60));
$gap=($gap/(24*60*60));
//可以寫成$gap=($time2-$time1-(24*60*60))/(24*60*60);

$duration=($time2-$time1+(24*60*60));
$duration=($duration/(24*60*60));

$diff=($time2-$time1);
$diff=($diff/(24*60*60));

echo "<br>";
echo "中間間隔 ".$gap."天";
echo "<br>";
echo "經過了 ".$duration."天";
echo "<br>";
echo "相差了 ".$diff."天";


?>