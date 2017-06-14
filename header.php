<header>
    <img src="img/logo.png" alt="logo DC" id="logo">
    <ul>
        <?php
        session_start();
        if (isset($_SESSION['user'])){?>
            <li><a href=newArticle.php>Create Page</a></li>
        <?php } else { ?>
            <li><a href="register.php">Register</a></li>
        <?php }?>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <?php
    if (isset($_POST['deconnection'])) {
        unset($_SESSION['user']);
    }
    if (isset($_SESSION['user']))
    {
        ?>
        <form action="" method="POST">
            <h2><?php echo $_SESSION['user']; ?></h2>
            <?php if(is_file("user_page/".$_SESSION['user']."/index.php")) {?>
                <a href="user_page/<?php echo $_SESSION['user'];?>">Mon Site</a>
            <?php } ?>
            <input type="submit" name="deconnection" value="deconnection">
        </form>
        <?php
    } else {
        ?>
            <form action="auth.php" method="POST">
                <input type="hidden" name="login" value="login">
                <input type="text" name="user" placeholder="Username">
                <input type="password" name="pass" placeholder="Password">
                <?php if (isset($_GET['login']) && $_GET['login'] == "false") { ?>
                    <p class="text_error">Login or password invalid</p>
                <?php } ?>
                <a href="register.php">register</a>
                <input type="submit" value="Go">
            </form>
        <?php
    }
    ?>
</header>