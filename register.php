<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Auth</title>
</head>
<body>
    <?php
        include_once("header.php");
    ?>
    <form action="auth.php" method="POST" id="register">
        <input type="hidden" name="login" value="register">
        <input type="text" name="user" id="user" placeholder="Username">
        <input type="password" name="pass" id="pass" placeholder="Password">
        <input type="password" name="pass2"id="pass2" placeholder="retype Password">
        <input type="submit" value="Go">
    </form>
    <p id="error_pass"></p>
    <script type="text/javascript" src="pass.js"></script>
</body>
</html>