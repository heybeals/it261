<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
}

$sql = 'SELECT * FROM people WHERE people_id= '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $first_name = stripcslashes($row['first_name']);
        $last_name = stripcslashes($row['last_name']);
        $source = stripcslashes($row['source']);
        $birthdate = stripcslashes($row['birthdate']);
        $occupation = stripcslashes($row['occupation']);
        $blurb = stripcslashes($row['blurb']);
        $details = stripcslashes($row['details']);
        $feedback = '';
    }
} else {
    $feedback = 'Oh No! Something went wrong.';
}

include ('./includes/header.php');
?>

<div id="wrapper">
<main>
    <h2>Introducing you to <?php echo $first_name;?>'s Page</h2>
    <ul>
        <?php
        echo '
        <li><b>First Name: </b>  '.$first_name.'</li>
        <li><b>Last Name: </b>  '.$last_name.'</li>
        <li><b>Source: </b>  '.$source.'</li>
        <li><b>Birth Date: </b>  '.$birthdate.'</li>
        <li><b>Occupation: </b>  '.$occupation.'</li>
        <li><p>'.$details.'</p></li>
        ';
        ?>
    </ul>
    <p><a href="people.php">Back to the <em>People page</em></a></p> 
</main>
<aside>
    <h3>A face to a name:</h3>
    <figure>
        <img src="./images/people<?php echo $id;?>.jpg" alt="<?php echo $first_name;?>">
        <figcaption>
            <?php
            echo '
            '.$first_name.' '.$last_name.' - '.$occupation.'
            ';
            ?>
        </figcaption>
    </figure>
    <p><em><?php echo $blurb;?></em></p>
</aside>
<?php
@mysqli_free_result($result);
@mysqli_close($iConn);
?>
</div>
<?php include ('./includes/footer.php'); ?>