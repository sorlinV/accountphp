<?php
    session_start();
    if (!is_dir("user_page")) {
        mkdir("user_page");
    }
    if (isset($_SESSION['user'])){
        if (!is_dir("user_page/" . $_SESSION['user'])) {
            mkdir("user_page/" . $_SESSION['user']);
            $page_blog = fopen("user_page/" . $_SESSION['user'] . "/index.php", "w");
            fwrite($page_blog, file_get_contents("blogdefault.php"));
            fclose($page_blog);
        }
        if (isset($_POST['title_article']) && isset($_POST['content_article'])) {
            if (!is_file("user_page/" . $_SESSION['user'] . '/' . $_POST['title_article'] . '.txt')) {
                $file = fopen("user_page/" . $_SESSION['user'] . '/' . $_POST['title_article'] . '.txt', "w");
                fwrite($file, $_POST['content_article']);
                fclose($file);
                header('location: '. "user_page/" . $_SESSION['user'] . '/index.php');
                exit ();
            } else {
                header('location: '. "user_page/" . $_SESSION['user'] . '/index.php');
                exit ();
            }
        }
    } else {
        header('location: index.php');
    }
?>