<?php
// if statements
// if-else statements
//if-elseif statements

$temp = 55;
if ($temp <= 60) {
   echo "It's a kinda warm day.";
} else {
    echo 'It may be getting warmer!';
}
echo '<br>';
$new_temp = 81;
if ($new_temp <= 60) {
    echo 'Stay inside where it\'s safe and warm!';
} elseif ($new_temp <= 70) {
    echo "It's getting warmer.";
} elseif ($new_temp <= 80) {
    echo 'Today might be a good beach day!';
} else {
   echo "<em><strong>Definitely...</strong></em>Chillin' with my Beaches!";
}

echo '<h2>This exercise will be about a salary, a bonus, and sales.</h2>';
//annual salary = 95000
//bonuses = sales above 100000
// 100000 = 5% bonus
// 120000 = 10% bonus
// 140000 = 15% bonus
// 150000 = 20% bonus

$salary = 95000;
$sales = 150000;
if ($sales <= 99999) {
    echo 'Sorry, but you didn\'t earn a bonus.';
} elseif ($sales <= 119999) {
    $salary *= 1.05;
    echo '$'.number_format($salary, 2).' USD';
} elseif ($sales <= 139999) {
    $salary *= 1.10;
    echo '$'.number_format($salary, 2).' USD';
} elseif ($sales <= 149999) {
    $salary *= 1.15;
    echo '$'.number_format($salary, 2).' USD';
} else {
    $salary *= 1.20;
    echo 'Congrats! You\'ve earned 20% bonus. Your annual salary including the bonus totals: $'.number_format($salary, 2).' USD';
}