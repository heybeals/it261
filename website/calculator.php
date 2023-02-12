<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        fieldset {
            border: 1px solid #333;
            padding: 10px;
            background: #dae2df;
        }
        input[type=text], input[type=number] {
            width: 100%;
            display: block;
            height: 30px;
            margin-bottom: 10px;
        }
        input[type=submit] {
            width: auto;
            padding: 5px;
            margin-bottom: 10px;
            background: #ffa07a;
        }
        select {
            display: block;
            margin-bottom: 15px;
            background: #fff;
        }
        form ul {
            margin-bottom: 10px;
            list-style-type: none;
        }
        .box {
            width: 400px;
            margin: 0px auto;
            padding: 10px;
        }
        .error {
            color: firebrick;
            font-style: italic;
            font-size: 1.15em;
            margin-top: 15px;
        }
        h1, h3 {
            text-align: center;
            margin: 20px 0;
        }
        h2, p {
            text-align: center;
            margin-top: 10px;
        }
        
    </style>
</head>
<body>
    <h1>Travel Calculator</h1>
    <h3><em>* indicates required field</em></h3>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>Name*:</label>
            <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
            <label>How many miles are you traveling*:</label>
            <input type="number" name="distance" value="<?php if (isset($_POST['distance'])) echo htmlspecialchars($_POST['distance']); ?>">
            <label>What is the average speed you drive*:</label>
            <input type="number" name="speed" value="<?php if (isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']); ?>">
            <label>How many hours per day will be spent driving*:</label>
            <input type="number" name="hours" step="0.25" value="<?php if (isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']); ?>">
            <label>Select the average price of gas*:</label>
                <ul>
                    <li><input type="radio" name="gas" value="3.25" <?php if (isset($_POST['gas']) && $_POST['gas'] == 3.25) echo 'checked="checked"'; ?>> $3.25 / gallon </li>
                    <li><input type="radio" name="gas" value="3.50" <?php if (isset($_POST['gas']) && $_POST['gas'] == 3.50) echo 'checked="checked"'; ?>> $3.50 / gallon </li>
                    <li><input type="radio" name="gas" value="3.75" <?php if (isset($_POST['gas']) && $_POST['gas'] == 3.75) echo 'checked="checked"'; ?>> $3.75 / gallon </li>
                    <li><input type="radio" name="gas" value="4.00" <?php if (isset($_POST['gas']) && $_POST['gas'] == 4.00) echo 'checked="checked"'; ?>> $4.00 / gallon </li>
                    <li><input type="radio" name="gas" value="4.25" <?php if (isset($_POST['gas']) && $_POST['gas'] == 4.25) echo 'checked="checked"'; ?>> $4.25 / gallon </li>
                    <li><input type="radio" name="gas" value="4.50" <?php if (isset($_POST['gas']) && $_POST['gas'] == 4.50) echo 'checked="checked"'; ?>> $4.50 / gallon </li>
                    <li><input type="radio" name="gas" value="4.75" <?php if (isset($_POST['gas']) && $_POST['gas'] == 4.75) echo 'checked="checked"'; ?>> $4.75 / gallon </li>
                </ul>
            <label>Select your vehicle's average gas mileage (fuel efficiency)*:</label>
                <select name="efficiency">
                    <option value="" NULL <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == NULL) echo 'selected="unselected"'; ?>>Select One</option>
                    <option value="8" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '8') echo 'selected="selected"'; ?>>10 mpg or less</option>
                    <option value="13" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '13') echo 'selected="selected"'; ?>>11 - 15 mpg</option>
                    <option value="18" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '18') echo 'selected="selected"'; ?>>16 - 20 mpg</option>
                    <option value="23" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '23') echo 'selected="selected"'; ?>>21 - 25 mpg</option>
                    <option value="28" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '28') echo 'selected="selected"'; ?>>26 - 30 mpg</option>
                    <option value="33" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '33') echo 'selected="selected"'; ?>>31 - 35 mpg</option>
                    <option value="38" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '38') echo 'selected="selected"'; ?>>36 - 40 mpg</option>
                    <option value="43" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '43') echo 'selected="selected"'; ?>>41 - 45 mpg</option>
                    <option value="48" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '48') echo 'selected="selected"'; ?>>46 mpg or more</option>
                </select>
            <input type="submit" value="Calculate Trip">
        </fieldset>
    </form>
    <p><a href="">RESET</a></p>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['name'])) {
                echo '<p class="error">Please, fill out your name.</p>';
            } if (empty($_POST['distance'])) {
                echo '<p class="error">Please, fill out your travel distance.</p>';
            } if (empty($_POST['speed'])) {
                echo '<p class="error">Please, provide your typical speed.</p>';
            } if (empty($_POST['hours'])) {
                echo '<p class="error">Please, specify how long you intend to drive.</p>';
            } if (empty($_POST['gas'])) {
                echo '<p class="error">Please, select the travel area\'s price of gas.</p>';
            } if ($_POST['efficiency'] == NULL) {
                echo '<p class="error">Please, select your vehicle\'s gas mileage.</p>';
            } if (isset($_POST['name'], $_POST['distance'], $_POST['speed'], $_POST['hours'], $_POST['gas'], $_POST['efficiency'])) {
                $name = $_POST['name'];
                $distance = (int)$_POST['distance'];
                $speed = (int)$_POST['speed'];
                $hours = (int)$_POST['hours'];
                $gas = (int)$_POST['gas'];
                $efficiency = (int)$_POST['efficiency'];
                $usd = ($distance / $efficiency) * $gas;
                if ($speed == 0) {
                    $speed = 1;
                }
                $drive_time = $distance / $speed;
                if ($hours == 0) {
                    $hours = 1;
                }
                $day = ($drive_time / $hours);
                $fuel = $distance / $efficiency;

                if (!empty($name && $distance && $speed && $hours && $gas && $efficiency)) {

                echo 
                '<div class="box">
                    <h2>Hello '.$name.',</h2>
                    <p>Your trip would cost approximately <b>$'.number_format($usd, 2).'  USD</b> in gas expenses. It would take
                    <b><em>'.number_format($drive_time, 1).'hrs</em></b> over a preiod of <b>'.number_format($day, 1).' days</b>, using <b>~'.number_format($fuel,1).' gallons</b> of gas in the process.</p>
                </div>';
            }
        }
    }
    ?>
</body>
</html>