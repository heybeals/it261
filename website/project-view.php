<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:project.php');
}

$sql = 'SELECT * FROM broncos WHERE car_id= '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $year = stripslashes($row['year']);
        $price = stripslashes($row['price']);
        $color = stripslashes($row['color']);
        $source = stripslashes($row['source']);
        $location = stripslashes($row['location']);
        $trans = stripslashes($row['trans']);
        $details = stripslashes($row['details']);
        $feedback = '';
    }
} else {
    $feedback = 'Oh No! Something went wrong.';
}

include ('./includes/header.php');
?>

<div id="wrapper">
<main class="blurb">
    <h2>Check out this <?php echo $year;?> Bronco</h2>
    <ul>
        <?php
        echo '
        <li><b>Year: </b>  '.$year.'</li>
        <li><b>Price: </b> $ '.$price.'</li>
        <li><b>Transmission: </b>  '.$trans.'</li>
        <li><b>Color: </b>  '.$color.'</li>
        <li><b>Location: </b>  '.$location.'</li>
        <li><b>Source: </b>  '.$source.'</li>
        <p>'.$details.'</p>
        ';
        ?>
    </ul>
    <p><a href="project.php">Back to the <em>Bronco page</em></a></p> 
</main>
<aside>
    <h3>A view of the goods:</h3>
    <figure>
        <img src="./images/car<?php echo $id;?>.jpg" alt="<?php echo $id;?>">
        <figcaption>
            <?php
            echo '
            '.$year.' '.$price.' - '.$location.'
            ';
            ?>
        </figcaption>
    </figure>
</aside>
<?php
@mysqli_free_result($result);
@mysqli_close($iConn);
?>
</div>
<?php include ('./includes/footer.php'); ?>