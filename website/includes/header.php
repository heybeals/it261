<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body; ?>">
<header>
 <div class="inner-header">
      <a href="index.php">
      <img id="logo" src="images/DBeals%20logo.png" alt="logo"></a>
    <!-- <nav>
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">About</a></li>
      <li><a href="">Daily</a></li>
      <li><a href="">Projects</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="">Gallery</a></li>
    </ul>  
    </nav> -->
    <nav>
        <ul>
        <?php 
        echo make_links($nav);
        ?>
        </ul>
    </nav>
 </div>
 <!--end inner header-->
</header>