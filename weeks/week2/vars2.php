<?php

$name= 'Danielle';
$first_name= 'Danielle';
$last_name= 'Beals';
echo '<br>';
$name= 'Danielle';
$name .= ' Beals';
echo $name;

echo '<br>';
$color= 'blue';
echo $color;
echo '<br>';

echo 'Danielle\'s favorite color is '.$color.'.';
echo '<br>';

$x= 20;
$y= 5;
$z= $x + $y;
echo $z;
echo '<br>';

$x= 20;
$x +=5;
echo $x;
echo '<br>';

$x= 100;
$x /=10;
echo $x;
echo '<br>';
echo '<h3>Our <em>product, quantity, and tax</em> exercise:</h3>';
$product= 120;
$quantity= 5;
$total= $product * $quantity;
$total *= 1.097;
echo $total;
echo '<br>';
echo '<h3>We would like to reflect 2 decimal places for the amount. 
So, we\'re thinking about floats and a new function: number_format( )</h3>';
$product= 120;
$quantity= 5;
$total= $product * $quantity;
$total *= 1.105;
$total_friendly= number_format($total, 2);
echo 'We have a total of <b>$'.$total_friendly.'</b> USD';
echo '<br>';

$product= 120;
$quantity= 5;
$total= $product * $quantity;
$total *= 1.097;
echo 'We have a total of <b>$'.number_format($total, 2).'</b> USD';
echo '<h3>Our second preset function is the date fucntion.</h3>';
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';
echo date('l jS \of F Y h:i:s A');
echo '<br>';
echo date('l jS \of F Y h:i A');
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date('l jS \of F Y h:i:s A');
echo '<br>';
echo '<h3>What time is it? Array Time!</h3>';
echo '<h4>Below is an indexed array</h4>';
$fruit[]= 'strawberries';
$fruit[]= 'cherries';
$fruit[]= 'melons';
$fruit[]= 'kiwi';
$fruit[]= 'oranges';
$fruit[]= 'apples';

echo $fruit;
echo '<br>';
echo $fruit[2];
echo '<br>';
$fruit= array(
    'strawberries',
    'cherries',
    'melons',
    'kiwi',
    'oranges',
    'apples'
);
echo '<br>';
$fruit= [
    'strawberries',
    'cherries',
    'melons',
    'kiwi',
    'oranges',
    'apples'
];
echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);

echo '<h3>Now we have an associative array</h3>';
$nav= array(
    'index.php' => 'Home', //key => value
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);
echo '<pre>';
var_dump($nav);
echo '</pre>';
