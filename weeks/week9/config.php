<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

$success = 'You have succesfully logged in';

$errors = array() ;

 

 

 

function myError($myFile, $myLine, $errorMsg) {
    if(defined('DEBUG') && DEBUG) {
        echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    } else {
        echo ' Awww Snap! Something is amiss...';
        die();
    }
    
    
}
