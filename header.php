<header>
    <img src="img/logo.png" alt="logo DC" id="logo">
    <ul>
        <li><a href="register.php">Register</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <?php
    session_start();
    if (isset($_POST['deconnection'])) {
        unset($_SESSION['user']);
    }
    if (isset($_SESSION['user']))
    {
        ?>
        <form action="" method="POST">
            <h2><?php echo $_SESSION['user']; ?></h2>
            <input type="submit" name="deconnection" value="deconnection">
        </form>
        <?php
    } else {
        ?>
            <form action="auth.php" method="POST">
                <input type="hidden" name="login" value="login">
                <input type="text" name="user" placeholder="Username">
                <input type="pass" name="pass" placeholder="Password">
                <a href="register.php">register</a>
                <input type="submit" value="Go">
            </form>
        <?php
    }
    ?>
</header>