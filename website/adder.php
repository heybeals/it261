<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Adder Assignment</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        form {
            max-width: 400px;
            margin: 0 auto 10px auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        fieldset {
            border: 2px solid #ffa07a;
            padding: 10px;
        }
        input {
            width: 100%;
            display: block;
            margin-bottom: 10px;
            height: 30px;
        }
        input[type=submit] {
            width: auto;
            padding: 5px;
        }
        h1 {
            text-align: center;
            color: green;
            margin: 20px 0;
        }
        h2, p {
            text-align: center;
            margin-top: 10px;
        }
        .error {
            color: indianred;
            font-style: italic;
            font-size: .9em;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <h1>Adder.php</h1>
    <form action="" method="post">
        <fieldset>
            <label>Enter a value for the first number:</label>
            <input type="number" name="num1" step="0.01">
            <label>Enter a value for the second number:</label>
            <input type="number" name="num2" step="0.01">
            <input type="submit" value="Add 'Em Up!">
        </fieldset>
        <p><a href="">RESET</a></p>
    </form>
    <?php
        if (isset($_POST['num1'], $_POST['num2'])) {
            if (empty($_POST['num1'] && $_POST['num2'] )) {
                echo '<p class="error">Please, provide a value for all the fields.</p>';
            } else {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $myTotal = $num1 + $num2;
                
                echo 
                    '<h2>You added '.$num1.' and '.$num2.'</h2><br>
                    <p style="color:red;">and the answer is...<br>'.$myTotal.'</p>
                    ';
            }
        }
    ?>
</body>
</html>

<!-- php before the html belong within the body tags after the end form tag -->
<!-- styles not specified between style tags -->
<!-- missing styles for h1 color, text alignments for h1 & p, fieldset border color -->
<!-- No space between fields / legibility issues -->
<!-- Form tag opens with an end form tag -->
<!-- Form tag missing method declaration of POST -->
<!-- Opening and closing fieldset tags missing / needed if you want to style with color red-->
<!-- Inconsistent label name for variables -->
<!-- Incorrect input type for variables -->
<!-- Add step for input to calculate decimals entered / or specify to put in whole numbers -->
<!-- Reset placed after end form / disabled when error message active -->
<!-- $_POST for num2 is missing from isset -->
<!-- Nested if for empty field error is missing -->
<!-- Echo for error is missing and needs an error class -->
<!-- else missing for when values are entered -->
<!-- myTotal variable has added - character -->
<!-- Too many echos / consolidate to one and clean up to one h1 and one p tags -->
<!-- '.$num2.' typed incorrectly within a double quote / use single quote -->
<!-- inconsitent variable name for num2 -->
<!-- add stlye to p tag -->
<!-- closing php tag after closing html / should be before closing body tag-->