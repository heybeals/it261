<?php

if (isset($_POST['name'], $_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo $name;
    echo '<br>';
    echo $email;
} else {
    echo 
    '<form action="" method="post">
    <label>First Name:</label>
    <input type="text" name="name">
    <label>Email:</label>
    <input type="email" name="email">
    <input type="submit" value="Send It">
    </form>';
}