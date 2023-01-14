<?php
/* My Variables */

$name= "Danielle"; //Danielle is a string
$name= 'Danielle';
echo $name;

$body_temp=98; //98 is an integer
$body_temp_new=98.6; //98 is a float
echo '<br>';
echo "<br>";
echo $body_temp;
echo "<br>";
echo $body_temp_new;
echo "<br>";
echo "My name is $name!";
echo "<br>";
echo 'My name is $name!'; //Single quotes is cleaner in legibility when mixed with HTML

echo "<br>";
echo 'My name is '.$name.'!';
echo "<br>";
echo 'The normal body temperature for a human being is '.$body_temp_new.'.';
echo "<br>";
$name= 'Beals';
echo $name;
echo "<br>";
$x= 20;
$y= 5;
$z= $x + $y;
echo $z;
echo "<br>";
$z= $x * $y;
echo $z;
echo "<br>";
$z= $x / $y;
echo $z;
echo "<br>";

$first_name= 'Danielle';
$last_name= 'Beals';
echo $first_name." ".$last_name;
echo "<br>";
echo "My full name is $first_name $last_name";
echo "<br>";
echo 'My full name is '.$first_name.' '.$last_name.'';
