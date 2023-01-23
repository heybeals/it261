<?php
//date function and if statements
echo date ('Y');
echo '<br>';
echo date ('l, F j, Y h:i: A');

echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date ('l, F j, Y h:i: A');

echo '<br>';
$name = 'Danielle';
$my_time = date('H:i A');

echo '<br>';
echo $my_time;

if ($my_time <= 11) {
    echo '<h2 style="color:yellow;">Good Morning, '.$name.'</h2>
    <img src="images/morning.jpg" alt="morning sun">
    <p>It\'s time to get up.</p>';
} elseif ($my_time <= 17) {
    echo '<h2 style="color:green;">Good Afternoon, '.$name.'</h2>
    <img src="images/afternoon.png" alt="midday sun">
    <p>It\'s time to get moving.</p>';
} else {
    echo '<h2 style="color:blue;">Good Evening, '.$name.'</h2>
    <img src="images/evening.png" alt="evening sun">
    <p>It\'s time to relax.</p>';
}