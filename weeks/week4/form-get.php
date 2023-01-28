<?php
// using $_GET variable 

if (isset($_GET['name'], $_GET['email'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
} else {
    echo 
    '<form action="" method="get">
    <label>First Name:</label>
    <input type="text" name="name">
    <label>Email:</label>
    <input type="email" name="email">
    <input type="submit" value="Confirm">
    </form>';
}