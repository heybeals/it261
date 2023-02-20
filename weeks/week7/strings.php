<?php

$statement = 'Presently, I am reading Legends and Lattes';
echo $statement;
echo '<br>';
echo substr($statement, 0);
echo '<br>';
echo substr($statement, 1);
echo '<br>';
echo substr($statement, 10);
echo '<h2>Just the middle</h2>';
echo '<br>';
echo substr($statement, 11, 12);
echo '<h2>Display the end</h2>';
echo '<br>';
echo substr($statement, -18, 7);
echo '<br>';
echo substr($statement, 4, 11);
echo '<br>';
echo substr($statement, -21, 2);

echo '<br>';
$statement2 = 'Hulu\'s show is based on the book the Looming Tower';

echo str_replace('the', 'The', $statement2);