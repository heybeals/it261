<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Arithmetic Form</h1>
    <h3><em>* indicates required field</em></h3>
    <form action="" method="post">
        <fieldset>
            <label>Name*:</label>
            <input type="text" name="name">
            <label>Phone*:</label>
            <input type="tel" name="phone">
            <label>How Many Lattes*:</label>
            <input type="number" name="lattes">
            <label>How Many Cappuccinos*:</label>
            <input type="number" name="cappuccinos">
            <label>How Many Americanos*:</label>
            <input type="number" name="americanos">
            <label>Any Special Requests*:</label>
            <textarea name="comments"></textarea>
            <input type="submit" value="Submit Order">
        </fieldset>
    </form>
    <p><a href="">RESET</a></p>
    <?php 
        date_default_timezone_set('America/Los_Angeles');
        $my_time= date('H:i');

        if (isset($_POST['name'], $_POST['phone'], $_POST['lattes'], $_POST['cappuccinos'], $_POST['americanos'], $_POST['comments'] )) {
            if (empty($_POST['name'] && $_POST['phone'] && $_POST['lattes'] && $_POST['cappuccinos'] && $_POST['americanos'] && $_POST['comments'])) {
                echo '<p class="error">Please, fill out all the required fields.</p>';
            } else {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $lattes = $_POST['lattes'];
                $cappuccinos = $_POST['cappuccinos'];
                $americanos = $_POST['americanos'];
                $comments = $_POST['comments'];
                $total = $lattes + $cappuccinos + $americanos;

                if ($my_time <=11) {
                    $my_time= "Good Morning";
                } elseif ($my_time <=17) {
                    $my_time= "Good Afternoon";
                } else {
                    $my_time= "Good Evening";
                }

                echo 
                '<div class="box">
                    <h2>'.$my_time.' '.$name.'!</h2>
                    <p>This confirms your order from <b>phone number: </b><em>'.$phone.'</em>
                    and the order placed was for <b>'.$total.'</b> beverages specified as follows:</p>
                        <ul>
                            <li>'.$lattes.' lattes</li>
                            <li>'.$cappuccinos.' cappuccinos</li>
                            <li>'.$americanos.' americanos</li>
                        </ul>
                        <br>
                    <p>Including these <em>special requests:</em> <b>'.$comments.'</b></p><br>
                    <p><em>Thank you for your business!</em></p>
                </div>';
            }
        }
    ?>
</body>
</html>