<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            border-collapse: collapse;
        }
        table td{
            padding: 5px;
            text-align: center;
            border: 1px solid #aaa;
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

        for ($i = 0; $i < 6; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {
                echo "<td>";
                echo $j;
                echo "</td>";
            }
            echo "</tr>";
        }


        ?>
    </table>

</body>

</html>