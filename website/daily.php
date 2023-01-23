<?php
include ('./includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch HW3</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        #wrapper {
            width: 1080px;
            margin: 20px auto;
        }
        h1, h2 {
            margin-bottom: 5px;
        }
        img {
            max-width: 100%;
            margin-bottom: 10px;
        }
        p {
            margin-bottom: 20px;
            line-height: 1.5em;
        }
        main{
            padding: 20px;
        }

        aside{
            padding: 20px;
        }
    </style>
</head>
<body>
<div id="wrapper">
  <main>
    <h1>Welcome to my Daily Page!</h1>
    <p>Being a working mom doesn't leave much time to myself. I work 40hrs a week, have to be present so my
        kids don't turn into trolls, and still get schoolwork done. So, I relish those few blissful
        hours between the kids' bedtime and my own. Here's a glimpse into how I'll spend that precious time today.</p>
    
    <h2 style="color:<?php echo $hili;?>"><?php echo $day;?></h2>
       <img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
       <p><?php echo $content;?></p>
  </main>
  <aside>
    <h2>Curious about the rest of my week?</h2>
    <h3>Satisfy your stalker needs:</h3>
        <ul>
            <li><a style="color:
                    <?php
                        if ($today == 'Sunday') {
                            echo '#f76c5e';
                        } else {
                            echo '#fff';
                        };
                    ?>"
                href="daily.php?today=Sunday">Sunday</a></li>
            <li><a style="color:
                    <?php
                        if ($today == 'Monday') {
                            echo '#f76c5e';
                        } else {
                            echo '#fff';
                        };
                    ?>" 
                href="daily.php?today=Monday">Monday</a></li>
            <li><a style="color:
                    <?php
                        if ($today == 'Tuesday') {
                            echo '#f76c5e';
                        } else {
                            echo '#fff';
                        };
                    ?>"
                href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a style="color:
                    <?php
                        if ($today == 'Wednesday') {
                            echo '#f76c5e';
                        } else {
                            echo '#fff';
                        };
                    ?>"
                href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a style="color:
                    <?php
                        if ($today == 'Thursday') {
                            echo '#f76c5e';
                        } else {
                            echo '#fff';
                        };
                    ?>"
                href="daily.php?today=Thursday">Thursday</a></li>
            <li><a style="color:
                    <?php
                        if ($today == 'Friday') {
                            echo '#f76c5e';
                        } else {
                            echo '#fff';
                        };
                    ?>"
                href="daily.php?today=Friday">Friday</a></li>
            <li><a style="color:
                    <?php
                        if ($today == 'Saturday') {
                            echo '#f76c5e';
                        } else {
                            echo '#fff';
                        };
                    ?>"
                href="daily.php?today=Saturday">Saturday</a></li>
        </ul>
  </aside>
</div>
<!--end wrapper-->
</body>
</html>
<?php
include ('./includes/footer.php');