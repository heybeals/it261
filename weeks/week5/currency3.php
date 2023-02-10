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
    <title>Currency 3 Form (sticky)</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <p><em>* indicates required field</em></p>
            <label>Name*:</label>
            <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
            <label>Email*:</label>
            <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
            <label>Amount of currency to convert*:</label>
            <input type="number" name="amount" value="<?php if (isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']); ?>">
            <label>Select the currency type*:</label>
                <ul>
                    <li><input type="radio" name="currency" value="0.017" <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.017) echo 'checked="checked"'; ?>> Rubles </li>
                    <li><input type="radio" name="currency" value="0.75" <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.75) echo 'checked="checked"'; ?>> Canadian Dollars </li>
                    <li><input type="radio" name="currency" value="1.22" <?php if (isset($_POST['currency']) && $_POST['currency'] == 1.22) echo 'checked="checked"'; ?>> Pounds </li>
                    <li><input type="radio" name="currency" value="1.08" <?php if (isset($_POST['currency']) && $_POST['currency'] == 1.08) echo 'checked="checked"'; ?>> Euros </li>
                    <li><input type="radio" name="currency" value="0.0078" <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.0078) echo 'checked="checked"'; ?>> Yen </li>
                </ul>
            <label>Select your Banking Institution*:</label>
                <select name="bank">
                    <option value="" NULL <?php if (isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected="unselected"'; ?>>Select One</option>
                    <option value="BOA" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'BOA') echo 'selected="selected"'; ?>>Bank of America</option>
                    <option value="BECU" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'BECU') echo 'selected="selected"'; ?>>Boeing Employees Credit Union</option>
                    <option value="Chase Bank" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Chase Bank') echo 'selected="selected"'; ?>>Chase Bank</option>
                    <option value="Verity" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Verity') echo 'selected="selected"'; ?>>Verity Credit Union</option>
                    <option value="Wells Fargo" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Wells Fargo') echo 'selected="selected"'; ?>>Wells Fargo</option>
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
            } if (isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'], $_POST['bank'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $amount = floatval($_POST['amount']);
                $currency = floatval($_POST['currency']);
                $bank = $_POST['bank'];
                $usd = $amount * $currency;

                if (!empty ($name && $email && $amount && $currency && $bank)) {

                echo 
                '<div class="box">
                    <h2>Hello '.$name.',</h2>
                    <p>Your currency conversion equates to <b>$'.number_format($usd, 2).'  USD</b>; more information will be sent
                    to the following: <em>'.$email.'</em> and the funds deposited to <b>'.$bank.'.</b></p>
                </div>';
            }
        }
    }
    ?>
</body>
</html>