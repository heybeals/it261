<?php
include('server.php');
include('./includes/header.php');

?>
<div id="wrapper">
<h1>Login Page</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <legend><em>* indicates required field</em></legend>
        <label>Username*:</label>
        <input type="text" name="username" value="<?php if (isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>">
        <label>Password*:</label>
        <input type="password" name="password">
        <button type="submit" name="login_user" class="btn">Login</button>
        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>
    </fieldset>
    <p class="error"><b><?php include('errors.php'); ?></b></p>
</form>

<p class="center">Can't log in? Please visit the <a href="register.php">Registration Page</a></p>
</div>
<?php include ('./includes/footer.php'); ?>