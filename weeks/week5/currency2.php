<!-- //Conversion rates
$ruble_rate= 0.017;
$pound_rate= 1.22;
$canadian_rate= 0.75;
$euro_rate= 1.08;
$yen_rate= 0.0078; -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 2 Form (dropdown)</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <p><em>* indicates required field</em></p>
            <label>Name*:</label>
            <input type="text" name="name">
            <label>Email*:</label>
            <input type="email" name="email">
            <label>Amount of currency to convert*:</label>
            <input type="number" name="amount">
            <label>Select the currency type*:</label>
                <ul>
                    <li><input type="radio" name="currency" value="0.017"> Rubles </li>
                    <li><input type="radio" name="currency" value="0.75"> Canadian Dollars </li>
                    <li><input type="radio" name="currency" value="1.22"> Pounds </li>
                    <li><input type="radio" name="currency" value="1.08"> Euros </li>
                    <li><input type="radio" name="currency" value="0.0078"> Yen </li>
                </ul>
            <label>Select your Banking Institution*:</label>
                <select name="bank">
                    <option value="" NULL>Select One</option>
                    <option value="BOA">Bank of America</option>
                    <option value="BECU">Boeing Employees Credit Union</option>
                    <option value="Chase Bank">Chase Bank</option>
                    <option value="Verity">Verity Credit Union</option>
                    <option value="Wells Fargo">Wells Fargo</option>
                </select>
            <input type="submit" value="Convert It">
            <p><a href="">RESET</a></p>
        </fieldset>
    </form>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['name'])) {
                echo '<p class="error">Please, fill out your name.</p>';
            } if (empty($_POST['email'])) {
                echo '<p class="error">Please, fill out your email.</p>';
            } if (empty($_POST['amount'])) {
                echo '<p class="error">Please, specify an amount.</p>';
            } if (empty($_POST['currency'])) {
                echo '<p class="error">Please, specify the currency.</p>';
            } if ($_POST['bank'] == NULL) {
                echo '<p class="error">Please, select your bank.</p>';
            } elseif (isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'], $_POST['bank'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $amount = $_POST['amount'];
                $currency = $_POST['currency'];
                $bank = $_POST['bank'];
                $usd = $amount * $currency;

                echo 
                '<div class="box">
                    <h2>Hello '.$name.',</h2>
                    <p>Your currency conversion equates to <b>$'.floor($usd).'  USD</b>; more information will be sent
                    to the following: <em>'.$email.'</em> and the funds deposited to <b>'.$bank.'.</b></p>
                </div>';
            }
        }
    ?>
</body>
</html>