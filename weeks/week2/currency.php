<?php
//Conversion rates
$ruble_rate= 0.017;
$pound_rate= 1.22;
$canadian_rate= 0.75;
$euro_rate= 1.08;
$yen_rate= 0.0078;

$ruble= 10007;
$pound= 500;
$canadian= 5000;
$euro= 1291;
$yen= 4030;

$ruble_converted= $ruble * $ruble_rate;
$pound_converted= $pound * $pound_rate;
$canadian_converted= $canadian * $canadian_rate;
$euro_converted= $euro * $euro_rate;
$yen_converted= $yen * $yen_rate;

$total= $ruble_converted + $pound_converted + $canadian_converted + $euro_converted + $yen_converted;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Currency Logic Exercise</title>
<style>
    *{
     padding: 0;
     margin: 0;
     box-sizing: border-box;   
    }
    #wrapper{
      width: 500px;
      margin: 30px auto;   
    }
    table{
      border: 1px solid #f0bd54;
      border-collapse: collapse;
      width: 100%;
    }
    th{
      border: 1px solid #333333;
      padding: 8px;  
    }
    tr, td{
      border-bottom: 1px solid #f0bd54;
      padding: 8px;  
    }
    tr:nth-child(6) {
        background-color: #ccc;
        text-align: center;
    }
    h1, h2, h3{
      text-align: center;  
    }
</style>
</head>
<body>
    <div id="wrapper">
        <h1>After my whirlwind travel, I have returned home with the following currencies:</h1>
        <ul>
          <li>Rubles</li>
          <li>Pound Sterling</li>
          <li>Canadian Dollars</li>
          <li>Euros</li>
          <li>Yen</li>  
        </ul>
        <br>
        <table>
            <caption><h2>How much do I have left, now that I'm home?</h2></caption>
            <thead style="background-color:powderblue;">
                <tr>
                    <th colspan="2">Currency</th>
                    <th>US Dollars</th>
                </tr>
            </thead>
            <tbody >
                <tr>
                    <td>Rubles</td>
                    <td><?php echo $ruble; ?></td>
                    <td><em>$<?php echo ''.number_format($ruble_converted, 2).'';?></em></td>
                </tr>
                <tr>
                    <td>Pound Sterling</td>
                    <td><?php echo $pound; ?></td>
                    <td><em>$<?php echo ''.number_format($pound_converted, 2).''; ?></em></td>
                </tr>
                <tr>
                    <td>Canadian Dollars</td>
                    <td><?php echo $canadian; ?></td>
                    <td><em>$<?php echo ''.number_format($canadian_converted, 2).''; ?></em></td>
                </tr>
                <tr>
                    <td>Euros</td>
                    <td><?php echo $euro; ?></td>
                    <td><em>$<?php echo ''.number_format($euro_converted, 2).''; ?></em></td>
                </tr>
                <tr>
                    <td>Yen</td>
                    <td><?php echo $yen; ?></td>
                    <td><em>$<?php echo ''.number_format($yen_converted, 2).''; ?></em></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>Grand Total</strong></td>
                    <td><strong>$<?php echo ''.number_format($total, 2).''; ?> USD</strong></td>
                </tr> 
            </tbody>
        </table>
    </div> 
<!--end wrapper-->    
</body>
</html>