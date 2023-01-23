<?php
//wine list = array

echo "<h2>Here's my wine list:</h2>";

$wines = array(
    'Cabernet Sauvignon', 
    'Pinot Nior',
    'Petite Sirah',
    'Malbec',
    'Red Zinfandel'
);

echo '<ul>';
foreach($wines as $key) {
    echo '<li>'.$key.'</li>';
}
echo '</ul>';

echo "<h2>Movies and Shows, which will have both a key and a value:</h2>";

$shows = [
    'Apple TV' => 'Ted Lasso',
    'Apple TV' => 'Mythic Quest',
    'Crunchyroll' => 'Mushoku Tensei',
    'Crunchyroll' => 'Jujutsu Kaisen',
    'Movie' => 'Stardust',
    'HiDive' => 'Eminence in Shadow'
];

echo '<ul>';
foreach($shows as $key => $value) {
    echo '<li><b>'.$key.'</b>: '.$value.' </li>';
}
echo '</ul>';

echo "<h2>Navigation, which will also have both a key and a value:</h2>";

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
echo '<ul>';
foreach($nav as $key => $value) {
    echo '<li><a href="'.$key.'">'.$value.'</a></li>';
}
echo '</ul>';