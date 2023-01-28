<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius Document</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Celsius Form Converter</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <label>Enter a value for Celsius:</label>
            <input type="number" name="cel">
            <input type="submit" value="Convert to Fahrenheit">
        </fieldset>
        <p><a href="">RESET</a></p>
    </form>
    <?php 
       if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['cel'])) {
                $cel = $_POST['cel'];
                $cel_int = intval($cel);
                $fahr = ($cel_int * 1.8) + 32;

                if ($cel == NULL) {
                    echo '<p class="error">Please enter a value for Celsius.</p>';
                } elseif ($fahr <= 32) {
                    echo '<p>'.$cel_int.' degrees <em>Celsius</em> equals '.$fahr.' degrees <em>Fahrenheit</em><br>
                    so just stay inside where it\'s warm and cozy!</p>';
                } elseif ($fahr <= 45) {
                    echo '<p>'.$cel_int.' degrees <em>Celsius</em> equals '.$fahr.' degrees <em>Fahrenheit</em><br>
                    so snuggle up with a warm cuppa and a good book.</p>';
                } elseif ($fahr <= 60) {
                    echo '<p>'.$cel_int.' degrees <em>Celsius</em> equals '.$fahr.' degrees <em>Fahrenheit</em><br>
                    so bundle up before you go out, it\'s still cold!</p>';
                } elseif ($fahr <= 75) {
                    echo '<p>'.$cel_int.' degrees <em>Celsius</em> equals '.$fahr.' degrees <em>Fahrenheit</em><br>
                    it\'s a nice day to head to the park!</p>';
                } elseif ($fahr <= 90) {
                    echo '<p>'.$cel_int.' degrees <em>Celsius</em> equals '.$fahr.' degrees <em>Fahrenheit</em><br>
                    I\'ll meet you at the beach!</p>';
                } else {
                    echo '<p>'.$cel_int.' degrees <em>Celsius</em> equals '.$fahr.' degrees <em>Fahrenheit</em><br>
                    It\'s an intermittent pool and A/C day. Stay Hydrated!</p>';
                }
            } # code...
       } 
    ?> 
</body>
</html>