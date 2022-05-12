<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table td {
            padding: 5px;
            text-align: center;
            border: 1px solid #aaa;
        }
        .weekday{
            background-color: beige;
        }
        .weekend{
            background-color: lightpink;
        }
        .today{
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <?php
    $month = 5;
    ?>
    <table>
        <tr>
            <td>Sun</td>
            <td>Mon</td>
            <td>Tue</td>
            <td>Wed</td>
            <td>Thr</td>
            <td>Fri</td>
            <td>Sat</td>
        </tr>
        <?php
        $firstDay = date("Y/") . $month . "/1";
        $firstWeekDay = date("w", strtotime($firstDay));
        $monthDays = date("t", strtotime($firstDay));
        // t 是識別指定月份有幾天的格式字串
        $lastDay = date("Y/") . $month . "/" . $monthDays;
        $today=date("Y-m-d");

        echo $month . " 月" . "共有 " . $monthDays . " 天";
        echo "<br>";
        echo "第一天是 " . $firstDay;
        echo "<br>";
        echo "第一天是星期 " . $firstWeekDay;
        echo "<br>";
        echo "最後一天是 " . $lastDay;


        // for ($i = 0; $i < 6; $i++) {
        //     echo "<tr>";
        //     for ($j = 0; $j < 7; $j++) {
        //         echo "<td>";
        //         if($i==0 && $j==$firstWeekDay){
        //             echo "1"; 
        //          用來找出第一週第一天所在位置
        //         }else if($i==0 && $j<$firstWeekDay){
        //             echo "";
        //         }else{
        //         echo $i*7+($j+1);
        //     }
        //     echo "</td>";
        //     }
        //     echo "</tr>";
        // }

        for ($i = 0; $i < 6; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {
                $d = $i * 7 + ($j + 1) - $firstWeekDay - 1;
                // $d用來確認日期是在格子中的第幾天

                if ($d >= 0 && $d < $monthDays) {
                    // $date=date("Y-m-d",strtotime("+$d days",strtotime($firstDay)));
                    $fs = strtotime($firstDay);
                    $shiftDay = strtotime("+$d days", $fs);
                    $date = date("j", $shiftDay);

                    $w = date("w", $shiftDay);
                    $chktoday="";
                    if(date("Y-m-d",$shiftDay)==$today){
                        $chktoday='today';
                    }
                    if ($w == 0 || $w == 6) {

                        echo "<td class='weekend $chktoday'>";
                    } else {
                        echo "<td class='weekday $chktoday'>";
                    }

                    echo $date;
                    echo "</td>";
                }else{
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }


        ?>
    </table>

</body>

</html>