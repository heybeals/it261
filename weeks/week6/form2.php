<?php
    ob_start();
    
    $first_name = '';
    $last_name = '';
    $email = '';
    $pronouns = '';
    $phone = '';
    $wine = '';
    $regions = '';
    $comments = '';
    $privacy = '';
    $first_name_err = '';
    $last_name_err = '';
    $email_err = '';
    $pronouns_err = '';
    $phone_err = '';
    $wine_err = '';
    $regions_err = '';
    $comments_err = '';
    $privacy_err = '';


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['first_name'])) {
            $first_name_err = 'Please provide your first name';
        } else {
            $first_name = $_POST['first_name'];
        } if (empty($_POST['last_name'])) {
            $last_name_err = 'Please provide your last name';
        } else {
            $last_name = $_POST['last_name'];
        } if (empty($_POST['email'])) {
            $email_err = 'Please provide your email';
        } else {
            $email = $_POST['email'];
        } if (empty($_POST['pronouns'])) {
            $pronouns_err = 'Please specify your preferred pronouns';
        } else {
            $pronouns = $_POST['pronouns'];
        } if (empty($_POST['phone'])) {
            $phone_err = 'Please provide your phone number';
        } else {
            $phone = $_POST['phone'];
        } if (empty($_POST['wine'])) {
            $wine_err = 'Oh no! You\'re missing the best part.';
        } else {
            $wine = $_POST['wine'];
        } if ($_POST['regions'] == NULL) {
            $regions_err = 'Please select a region';
        } else {
            $regions = $_POST['regions'];
        } if (empty($_POST['comments'])) {
            $comments_err = 'Please enter your comments';
        } else {
            $comments = $_POST['comments'];
        } if (empty($_POST['privacy'])) {
            $privacy_err = 'Confirm you\'ve read and agree to privacy policy';
        } else {
            $privacy = $_POST['privacy'];
        } function my_wine($wine) {
            $my_return = '';
            if (!empty($_POST['wine'])) {
                $my_return = implode(', ', $_POST['wine']);
            } else {
                $wine_err = 'Oh no! You\'re missing the best part.';
            }
            return $my_return;
        }
        
        if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['pronouns'], $_POST['phone'], $_POST['wine'], $_POST['regions'], $_POST['comments'], $_POST['privacy'])) {
            $to = 'daniellegajohnson@yahoo.com';
            $subject = 'Test Email on' .date('m/d/y, h i A');
            $body = 
            '
            First Name: '.$first_name.' '.PHP_EOL.'
            Last Name: '.$last_name.' '.PHP_EOL.'
            Email: '.$email.' '.PHP_EOL.'
            Pronouns: '.$pronouns.' '.PHP_EOL.'
            Phone: '.$phone.' '.PHP_EOL.'
            Wines: '.my_wine($wine).' '.PHP_EOL.'
            Region: '.$regions.' '.PHP_EOL.'
            Comments: '.$comments.' '.PHP_EOL.'
            ';
            $headers = array(
                'From' => 'noreply@rarebirdparties.com'
            );
            
            if (!empty($first_name && $last_name && $email && $pronouns && $phone && $wine && $regions && $comments)) {
                mail($to, $subject, $body, $headers);
                header('Location:thx.php');
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form 2</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <legend>Contact Danielle - <em>* indicates required field</em></legend>
            <label>First Name*:</label>
            <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
            <span class="error"><?php echo $first_name_err ?></span>
            <label>Last Name*:</label>
            <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
            <span class="error"><?php echo $last_name_err ?></span>
            <label>Email*:</label>
            <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
            <span class="error"><?php echo $email_err ?></span>
            <label>Preferred Pronouns*:</label>
                <ul>
                    <li><input type="radio" name="pronouns" value="She/Her/Hers" <?php if (isset($_POST['pronouns']) && $_POST['pronouns'] == "She/Her/Hers") echo 'checked="checked"'; ?>> She/Her/Hers </li>
                    <li><input type="radio" name="pronouns" value="He/Him/His" <?php if (isset($_POST['pronouns']) && $_POST['pronouns'] == "He/Him/His") echo 'checked="checked"'; ?>> He/Him/His </li>
                    <li><input type="radio" name="pronouns" value="They/Them/Theirs" <?php if (isset($_POST['pronouns']) && $_POST['pronouns'] == "They/Them/Theirs") echo 'checked="checked"'; ?>> They/Them/Theirs </li>
                    <li><input type="radio" name="pronouns" value="Other" <?php if (isset($_POST['pronouns']) && $_POST['pronouns'] == "Other") echo 'checked="checked"'; ?>> Other </li>
                </ul>
            <span class="error"><?php echo $pronouns_err ?></span>
            <label>Phone*:</label>
            <input type="tel" name="phone" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
            <span class="error"><?php echo $phone_err ?></span>
            <label>Favorite Wine(s)*:</label>
                <ul>
                    <li><input type="checkbox" name="wine[]" value="Cab Sauv" <?php if (isset($_POST['wine']) && in_array('Cab Sauv', $wine)) echo 'checked="checked"'; ?>> Cabernet Sauvignon </li>
                    <li><input type="checkbox" name="wine[]" value="Pinot Nior" <?php if (isset($_POST['wine']) && in_array('Pinot Nior', $wine)) echo 'checked="checked"'; ?>> Pinot Nior </li>
                    <li><input type="checkbox" name="wine[]" value="Petite Sirah" <?php if (isset($_POST['wine']) && in_array('Petite Sirah', $wine)) echo 'checked="checked"'; ?>> Petite Sirah </li>
                    <li><input type="checkbox" name="wine[]" value="Malbec" <?php if (isset($_POST['wine']) && in_array('Malbec', $wine)) echo 'checked="checked"'; ?>> Malbec </li>
                    <li><input type="checkbox" name="wine[]" value="Red Zinfandel" <?php if (isset($_POST['wine']) && in_array('Red Zinfandel', $wine)) echo 'checked="checked"'; ?>> Red Zinfandel </li>
                </ul>
            <span class="error"><?php echo $wine_err ?></span>
            <label>Regions*:</label>
                <select name="regions">
                    <option value="" NULL <?php if (isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected="unselected"'; ?>>Select One</option>
                    <option value="California" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'California') echo 'selected="selected"'; ?>>California</option>
                    <option value="France" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'France') echo 'selected="selected"'; ?>>France</option>
                    <option value="Italy" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'Italy') echo 'selected="selected"'; ?>>Italy</option>
                    <option value="Spain" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'Spain') echo 'selected="selected"'; ?>>Spain</option>
                    <option value="Australia" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'Australia') echo 'selected="selected"'; ?>>Australia</option>
                </select>
            <span class="error"><?php echo $regions_err ?></span>
            <label>Comments*:</label>
            <textarea name="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);  ?></textarea>
            <span class="error"><?php echo $comments_err ?></span>
            <label>Privacy Policy*:</label>
                <ul>
                    <li><input type="radio" name="privacy" value="agree" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == "agree") echo 'checked="checked"'; ?>> I Agree </li>
                </ul>
            <span class="error"><?php echo $privacy_err ?></span>
            <input type="submit" value="Send It">
            <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'];?>'" value="RESET"> 
        </fieldset>
    </form>
</body>
</html>