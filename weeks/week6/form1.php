<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form 1</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <legend>Contact Danielle - <em>* indicates required field</em></legend>
            <label>First Name*:</label>
            <input type="text" name="first_name">
            <label>Last Name*:</label>
            <input type="text" name="last_name">
            <label>Email*:</label>
            <input type="email" name="email">
            <label>Preferred Pronouns*:</label>
                <ul>
                    <li><input type="radio" name="pronouns" value="She/Her/Hers"> She/Her/Hers </li>
                    
                </ul>
            <label>Phone*:</label>
            <input type="tel" name="phone">
            <label>Favorite Wine(s)*:</label>
                <ul>
                    <li><input type="checkbox" name="wine[]" value="Cab Sauv"> Cabernet Sauvignon </li>
                    
                </ul>
            <label>Regions*:</label>
                <select name="regions">
                    <option value="" NULL>Select One</option>
                </select>
            <label>Comments*:</label>
            <textarea name="comments"></textarea>
            <label>Privacy Policy*:</label>
                <ul>
                    <li><input type="radio" name="privacy" value="agree"> I Agree </li>
                    
                </ul>
            <input type="submit" value="Send It">
        </fieldset>
    </form>
</body>
</html>