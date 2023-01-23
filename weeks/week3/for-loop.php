<?php
//convert temperatures in degrees Celsius to Fahrenheit, multiply by 1.8
//$far = ($cel * 1.8) +32; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        table{
            border: 1px solid #ffa07a;
            border-collapse: collapse;
            width: 500px;
            margin: 20px auto;
        }
        th, td{
            border: 1px solid #ffa07a;
            border-collapse: collapse;
            padding: 5px;  
        }
    </style>
</head>
<body>
    <table style="float: left;margin-right:30px;margin-left:25%;">
            <caption><h1>My Celcius to Fahrenheit Conversion Table:</h1></caption>
            <thead style="background-color: lightgreen;">
                <tr>
                    <th>Celcius</th>
                    <th>Fahrenheit</th>
                </tr>
            </thead>
            <tbody >
                <tr>
                    <?php
                        for ($cel=0; $cel <= 100; $cel+= 5) { 
                            $far = ($cel * 1.8) + 32;
                            echo '<tr>';
                            echo '<td>'.$cel.' degrees </td>';
                            echo '<td>'.$far.' degrees </td>';
                            echo '</tr>';
                        }
                    ?>
                </tr>
            </tbody>
    </table>
    <table style="float: left;">
            <caption><h1>My Kilometer to Miles Conversion Table:</h1></caption>
            <thead style="background-color: aliceblue;">
                <tr>
                    <th>Kilometers</th>
                    <th>Miles</th>
                </tr>
            </thead>
            <tbody >
                <tr>
                    <?php
                        for ($km=0; $km <= 100; $km+= 5) { 
                            $mi = ($km / 1.609);
                            echo '<tr>';
                            echo '<td>'.$km.' km. per hour </td>';
                            echo '<td>'.number_format($mi, 0).' mi. per hour </td>';
                            echo '</tr>';
                        }
                    ?>
                </tr>
            </tbody>
    </table>
</body>
</html>