<?php
//playing with dice 

$dice = rand(1, 6,);
echo '<p>'.$dice.'</p>';

// 2 dice
$dice1 = rand(1, 6,);
$dice2 = rand(1, 6,);

echo '<p>'.$dice1.' and '.$dice2.'</p>';

echo '<h2>If-Statements</h2>';

$dice1a = rand(1, 6,);
$dice2a = rand(1, 6,);

if ($dice1a == 6 && $dice2a == 6) {
    echo '<b>Dice 1: </b> '.$dice1a.' and <b>Dice 2:</b> '.$dice2a.'</p>';
    echo '<h2>CONGRATS! You hit the jackpot!!</h2>';
} elseif ($dice1a != 6 && $dice2a != 6 && $dice1a == $dice2a) {
    echo '<b>Dice 1: </b>'.$dice1a.' and <b>Dice 2:</b> '.$dice2a.'</p>';
    echo '<h2>You\'re a winner!</h2>';
} else {
    echo '<b>Dice 1: </b>'.$dice1a.' and <b>Dice 2:</b> '.$dice2a.'</p>';
    echo '<h2>Sorry, you didn\'t win this time. Try Again.</h2>';
}

echo '<h2>Displaying images using the random function.</h2>';

$photos [0] = 'photo1';
$photos [1] = 'photo2';
$photos [2] = 'photo3';
$photos [3] = 'photo4';
$photos [4] = 'photo5';

$i = rand(0, 4);

$sel_img = ''.$photos[$i].'.jpg';
echo '<img src="images/'.$sel_img.'" alt="'.$photos[$i].'">';

echo '<h2>Creating a function.</h2>';

function random_img($photos) {
    $my_return = '';
    $i = rand(0, 4);
    $sel_img = ''.$photos[$i].'.jpg';
    $my_return = '<img src="images/'.$sel_img.'" alt="'.$photos[$i].'">';
    return $my_return;
}
echo random_img($photos);