<?php
//1 Ruble= 0.017 USD
//1 Pound sterling= 1.22 USD
//1 Canadian Dollar= 0.75 USD
//1 Euro= 1.08 USD
//1 Yen= 0.0078 USD

//10,007 Ruble= 151.50 USD
//500 Pound sterling= 611.55 USD
//5,000 Canadian Dollar= 3730.65 USD
//1,200 Euro= 1301.22 USD
//2,000 Yen= 15.64 USD
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
      border: 1px solid #333333;
      border-collapse: collapse;
      width: 500px;
    }
    th, td{
      border: 1px solid #333333;
      padding: 8px;  
    }
    h1, h2, h3{
      text-align: center;  
    }
</style>
</head>
<body>
    <div id="wrapper">
        <h1>After my whirlwind travel, I have returned home with the following currencies</h1>
        <ul>
          <li>Rubles</li>
          <li>Pound Sterling</li>
          <li>Canadian Dollars</li>
          <li>Euros</li>
          <li>Yen</li>  
        </ul>
        <br>
        <table style="width:100%;border-spacing: 10px;">
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
                    <td>10,007</td>
                    <td><em>151.50</em></td>
                </tr>
                <tr>
                    <td>Pound Sterling</td>
                    <td>500</td>
                    <td><em>61.55</em></td>
                </tr>
                <tr>
                    <td>Canadian Dollars</td>
                    <td>5,000</td>
                    <td><em>3,730.65</em></td>
                </tr>
                <tr>
                    <td>Euros</td>
                    <td>1,200</td>
                    <td><em>1301.22</em></td>
                </tr>
                <tr>
                    <td>Yen</td>
                    <td>2,000</td>
                    <td><em>15.64</em></td>
                </tr> 
            </tbody>
        </table>
    </div> 
<!--end wrapper-->    
</body>
</html>