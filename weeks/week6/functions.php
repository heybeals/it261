<!-- Functions Page -->
<?php

function sayHello() {
    echo 'Hello PHP Function!';
}
sayHello();

echo '<h2>Arithmetic Problems</h2>';
function cube($num) {
    $cubes = $num * $num * $num;
    echo $cubes;
}

cube(5);

echo '<h2>Area= Width * Length</h2>';
function area($w, $l) {
    $get_area = $w * $l;
    return $get_area;
}
$get_area = area(5, 12);
echo $get_area;

echo '<h2>Celsius Converter</h2>';
function cel_conv($cel) {
    $fahr = ($cel * 1.8) + 32;
    echo $fahr;
}

cel_conv(100);

echo '<h2>Dealing with Indexed Arrays</h2>';
function area_vol($a, $b, $c) {
    $area = $a * $b;
    $vol = $a * $b * $c;
    return array($area, $vol);
}
$my_array = area_vol(10, 5, 20);
echo '<b>This is my area:</b> '.$my_array[0].'<br>';
echo '<b>This is my volume:</b> '.$my_array[1].'<br>';

echo '<h2>List Function</h2>';
function area_vol2($a, $b, $c) {
    $area = $a * $b;
    $vol = $a * $b * $c;
    return array($area, $vol);
}
list($area, $vol) = area_vol2(10, 5, 30);
echo '<b>This is my area:</b> '.$area.'<br>';
echo '<b>This is my volume:</b> '.$vol.'<br>';

echo '<h2>The Navigation</h2>';

define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));
//navigational array
$nav= array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
function make_links($nav) {
    $my_return = '';
    foreach ($nav as $key => $value) { 
        if (THIS_PAGE == $key) {
            $my_return .= '<li><a style="color:#f76c5e;" href="'.$key.'">'.$value.'</a></li>';
        } else {
            $my_return .= '<li><a style="color:#6d696a;" href="'.$key.'">'.$value.'</a></li>';
        }
    }
    return $my_return;
}

echo '<h2>The Navigation with Function</h2>';
echo make_links($nav);
// foreach($nav as $key => $value) {
//             if (THIS_PAGE == $key) {
//                 echo '<li><a style="color:#f76c5e;" href="'.$key.'">'.$value.'</a></li>';
//             } else {
//                 echo '<li><a style="color:#6d696a;" href="'.$key.'">'.$value.'</a></li>';
//             }
// }

echo '<h2>Implode Function</h2>';
$cars = array(
        'toyota',
        'ford',
        'subaru',
        'audi',
        'bmw',
        'mercedes',
        'lexus'
);
$my_cars = implode(', ', $cars);
echo $my_cars;

echo '<h2>Wine Logic on Form</h2>
<p>If post_wine is not empty, take post_wine and implode them; create a new variable named $my_wine</p>
';