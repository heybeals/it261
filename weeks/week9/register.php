<?php
include('server.php');
include('./includes/header.php');
?>
<div id="wrapper">
<h1>Register an Account</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <legend><em>* indicates required field</em></legend>
        <label>First Name*:</label>
        <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
        <label>Last Name*:</label>
        <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
        <label>Email*:</label>
        <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
        <label>Username*:</label>
        <input type="text" name="username" value="<?php if (isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>">
        <label>Password*:</label>
        <input type="password" name="password_1" value="<?php if (isset($_POST['password_1'])) echo htmlspecialchars($_POST['first_name']); ?>">
        <label>Confirm Your Password*:</label>
        <input type="password" name="password_2" value="<?php if (isset($_POST['password_2'])) echo htmlspecialchars($_POST['first_name']); ?>">
        <button type="submit" name="reg_user" class="btn">Register</button>
        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>
    </fieldset>
    <p class="error"><b><?php include('errors.php'); ?></b></p>
</form>

<p class="center">Already have an account? Please, <a href="login.php">Login</a></p>
</div>
<?php include ('./includes/footer.php'); ?>