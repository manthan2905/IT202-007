<link rel="stylesheet" href="static/css/styles.css">
<?php
//we'll be including this on most/all pages so it's a good place to include anything else we want on those pages
require_once(__DIR__ . "/../lib/helpers.php");
?>
<nav>
<ul class="nav">
    <li><a href="home.php">Home</a></li>
    <?php if (!is_logged_in()): ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="reset_password.php">Reset Password</a></li>
        <li><a href="register.php">Register</a></li>
    <?php endif; ?>
    <?php if (is_logged_in()): ?>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="create_account.php">Create Account</a></li>
        <li><a href="edit_account.php">Edit Account</a></li>
        <li><a href="list_account.php">List Account</a></li>
        <li><a href="create_transactions.php">Create Transactions</a></li>
<<<<<<< HEAD
        <li><a href="transaction_out.php">Transection Out</a></li>
=======
>>>>>>> dev
        <li><a href="list_transactions.php">List Transactions</a></li>
        <li><a href="reset_password.php">Reset Password</a></li>
        <li><a href="logout.php">Logout</a></li>
    <?php endif; ?>
</ul>
</nav>
