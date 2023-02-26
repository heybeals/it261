<?php
include('config.php');
include ('./includes/header.php');
?>

<div id="wrapper">
<main class="blurb">
    <h1>Meet these figures of Black History:</h1>
<?php
$sql = 'SELECT * FROM people';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_assoc($result)) {
    echo '
    <h2>Information about: '.$row['first_name'].' '.$row['last_name'].'</h2>
    <ul>
        <li><b>First Name: </b>  '.$row['first_name'].'</li>
        <li><b>Last Name: </b>  '.$row['last_name'].'</li>
        <li><b>Birth Date: </b>  '.$row['birthdate'].'</li>
    </ul>
    <p>For More information about <em>'.$row['first_name'].', click <a href="people-view.php?id='.$row['people_id'].'">here</a>.</em></p>
    ';
   }
} else {
    echo 'This is currently empty, but check back later.';
}
@mysqli_free_result($result);
@mysqli_close($iConn);

?>
</main>
<aside>
    <h3>Food for Thought:</h3>
    <?php echo random_img($photos); ?>
</aside>
</div>
<?php include ('./includes/footer.php'); ?>