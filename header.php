<header>
    <img src="img/logo.png" alt="logo DC" id="logo">
    <ul>
        <li><a href="register.php">Register</a></li>
        <li><a href="contact">Contact</a></li>
    </ul>
    <form action="auth.php" method="POST">
        <input type="hidden" name="login" value="login">
        <input type="text" name="user" placeholder="Username">
        <input type="pass" name="pass" placeholder="Password">
        <a href="register.php">register</a>
        <input type="submit" value="Go">
    </form>
</header>