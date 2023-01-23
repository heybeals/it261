<?php
// $variable = 'Here\'s the variable';
// if (isset($variable)) {
//     echo 'Variable has been set.';
// } else {
//    echo 'Variale as not been set!';
// }

// echo '<br>';
// if (isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'Nope!';
// }

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch ($today) {
    case 'Sunday':
        $tea = '<h2>Sunday is London Fog day.</h2>';
        $pic = 'london-fog.jpg'; 
        $alt = 'London Fog';
        $content = '<p>A <b><em>London Fog</em></b> is is a hot tea-based drink that consists of Earl Grey tea,
         steamed milk, and vanilla syrup.</p>';
        break;

    case 'Monday':
        $tea = '<h2>Monday is Dirty or Filthy Chai day.</h2>';
        $pic = 'chai-latte-.jpg'; 
        $alt = 'Chai Latte';
        $content = '<p>A <b><em>Dirty Chai</em></b> is a latte drink that contains a single shot or double shot 
        (<em>a filthy chai</em>) of espresso, steamed milk, and spiced black tea (masala chai).</p>';
        break;
        
    case 'Tuesday':
        $tea = '<h2>Tuesday is Earl Grey Hot Chocolate day.</h2>';
        $pic = 'earl-grey-hc.jpg'; 
        $alt = 'Earl Grey Hot Chocolate';
        $content = '<p>An <b><em>Earl Grey Hot Chocolate</em></b> is a caffeinated black tea flavored with bergamot, (a citrus fruit) 
        steeped in hot milk, heavy cream, and chocolate. For a truly decadent experience, melt a chocoalte bar in the milk instead of using a hot
        chocolate packet snd top with marshmallows!</p>';
        break;
    
    case 'Wednesday':
        $tea = '<h2>Wednesday is Macha Latte day.</h2>';
        $pic = 'green-tea-latte.jpg'; 
        $alt = 'Green Tea Latte';
        $content = '<p>A <b><em>Macha Latte</em></b> is a green tea latte drink that consists of blending steamed milk and 
        Matcha green tea, instead of espresso.</p>';
        break;

    case 'Thursday':
        $tea = '<h2>Thursday is Milk Tea and Brown Sugar day.</h2>';
        $pic = 'milk-tea.jpg'; 
        $alt = 'Milk Tea';
        $content = '<p><b><em>Milk Tea</em></b> is simply tea with milk. <em> Any kind of tea with any kind of milk.</em>
         I prefer black teas as they are caffeinated with half & half and brown sugar.</p>';
        break;

    case 'Friday':
        $tea = '<h2>Friday is Moroccan Mint Tea day.</h2>';
        $pic = 'moroccan-mint.jpg'; 
        $alt = 'Moroccan Mint Tea';
        $content = '<p><b><em>Moroccan Mint Tea</em></b> is a hot tea blend of gunpowder green tea, mint, and lots of sugar.</p>';
        break;

    case 'Saturday':
        $tea = '<h2>Saturday is Hojicha Latte day.</h2>';
        $pic = 'hojicha-tea.jpg'; 
        $alt = 'Hojicha Tea Latte';
        $content = '<p>A <b><em>Hojicha Latte</em></b> is a hot tea-based drink that consists of Hojicha, which is a Japanese roasted green tea,
        and steamed milk. Because hojicha is roasted, it has a nutty, toasted, caramel-like taste, and contanins less caffeine than regular green tea.</p>';
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Weekly Exercise</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        #wrapper {
            width: 940px;
            margin: 20px auto;
        }
        h1, h2, img {
            margin-bottom: 10px;
        }
        img {
            max-width: 50%;
            float: left;
            margin-right: 50px;
        }
        p {
            float: left;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <h1>My Weekly Exercise: The Switch</h1>
        <?php 
        echo $tea;
        ?>
        <img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
        <?php echo $content;?>
        <h2>Check out the daily specials:</h2>
        <ul>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>
    </div>
    <!-- end wrapper    -->
</body>
</html>