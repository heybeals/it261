<?php
include('config.php');
include ('./includes/header.php');
?>

<div id="wrapper">
<main class="blurb">
    <h1>Classic Ford Broncos for Sale:</h1>
<?php
$sql = 'SELECT * FROM broncos';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_assoc($result)) {
    echo '
    <h2>A '.$row['year'].' Bronco in '.$row['location'].'</h2>
    <ul>
        <li><b>Year: </b>  '.$row['year'].'</li>
        <li><b>Price: </b> $ '.$row['price'].'</li>
        <li><b>Location: </b>  '.$row['location'].'</li>
    </ul>
    <p>For More information about this <em>'.$row['color'].' '.$row['year'].' Bronco, click <a href="project-view.php?id='.$row['car_id'].'">here</a>.</em></p>
    ';
   }
} else {
    echo 'There isn\'t any inventory currently, but check back later.';
}
@mysqli_free_result($result);
@mysqli_close($iConn);

?>
</main>
<aside>
    <h3>Welcome to the dark side:</h3>
    <img src="images/bronco.webp" alt="Say hello">
    
</aside>
</div>
<?php include ('./includes/footer.php'); ?>