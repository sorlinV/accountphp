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
    /*
    auth.json exemple
    [
        {
            "user" : "isidoris2"
            "pass" : "AZER1234"
        },
        {
            "user" : "bob"
            "pass" : "09/03/1997"
        },
        {
            "user" : "jean"
            "pass" : "boneaux"
        }
    ]    
    */
    function user_exist ($user) {
        $content = file_get_contents("source/auth.json");
        $users = json_decode($content);
        foreach ($users as $u) {
            if ($user->user == $u->user) {
                return true;
            }
        }
        return false;
    }

    $form = new class{};
    if (!is_dir("source")) {
        mkdir("source");
    }

    if (isset($_POST['login'])) {
        $login = htmlspecialchars($_POST['login']);
        if ($login == "login" && file_exists("source/auth.json") &&
        isset($_POST['user']) && isset($_POST['pass'])) {
            $form->user = htmlspecialchars($_POST['user']);
            $form->pass = md5(htmlspecialchars($_POST['pass']));
            $fd = fopen("source/auth.json", "r") or die("Can't open file.");
            $content = file_get_contents("source/auth.json");
            $auths = json_decode($content);
            foreach ($auths as $auth) {
                if ($auth->user == $form->user && $auth->pass == $form->pass) {
                    session_start();
                    $_SESSION['user'] = $form->user;
                    header('Location: index.php');
                    exit ();
                }
            }
            fclose($fd);
        } elseif ($login == "register" && isset($_POST['user']) &&
        isset($_POST['pass']) && isset($_POST['pass2'])) {
            $form->user = htmlspecialchars($_POST['user']);
            $form->pass = md5(htmlspecialchars($_POST['pass']));
            if(!file_exists("source/auth.json") || file_get_contents("source/auth.json") == "") {
                $auths = [];
                $auths[0] = $form;
            } else {
                    $content = file_get_contents("source/auth.json");
                    $auths = json_decode($content);
                if (user_exist($form) == false) {
                    array_push($auths, $form);
                } else {
                    header('Location: register.php?user_exist=false');
                    exit();
                }
            }
            $fd = fopen("source/auth.json", "w") or die("Can't open file.");
            fwrite ($fd, json_encode($auths));
            echo json_encode($auths);
            fclose($fd);
            header('Location: index.php');
        }
    }
?>
</body>
</html>
