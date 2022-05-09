<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>日期/時間練習 格式化 format</h2>
    <h4>未設定timezone</h4>
    <?php
    echo date("Y-m-d H:i:s");
    ?>
    <hr>
    <h4>設定timezone Aisa/Taipei</h4>
    <?php
    date_default_timezone_set("Asia/Taipei");
    echo date("Y-m-d H:i:s");
    echo "<br>";
    echo date("Y 年 n 月 d 日 H 點 i 分 s 秒");
    ?>

    <h2>strtotime()</h2>
    <?php
    // 時間日期字串格式 yyyy-mm-dd hh:mm:ss
    $time = "2021-10-01 10:12:30";
    $second = strtotime($time);
    echo $time;
    echo "<br>";
    echo $second;
    // 之後放到date裡去做日期時間換算的基礎
    echo "<br>";
    echo date("西元 Y 年 m 月 d 日 l", $second);
    echo "<br>";
    $secondPlus = strtotime("+2 days", $second);
    echo date("西元 Y 年 m 月 d 日 l", $secondPlus);
    echo "<br>";
    $secondPlus = strtotime("+1 month", $second);
    echo date("西元 Y 年 m 月 d 日 l", $secondPlus);
    echo "<br>";
    $secondPlus = strtotime("-1 week", $second);
    echo date("西元 Y 年 m 月 d 日 l", $secondPlus);
    ?>

</body>

</html>