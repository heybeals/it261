<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

 

 

 

 

 

 

 

 

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Awww Snap! Something is amiss...';
      die();
  }
    
    
}

$photos [0] = 'photo1';
$photos [1] = 'photo2';
$photos [2] = 'photo3';
$photos [3] = 'photo4';
$photos [4] = 'photo5';


function random_img($photos) {
    $my_return = '';
    $i = rand(0, 4);
    $sel_img = ''.$photos[$i].'.jpg';
    $my_return = '<img src="images/'.$sel_img.'" alt="'.$photos[$i].'">';
    return $my_return;
}
