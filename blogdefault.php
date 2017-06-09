<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Mon Blog</title>
</head>
<body>
    <?php
        $dir_tab = explode("/", getcwd());
        $title = $dir_tab[count($dir_tab) - 1];
        echo "<h1>Blog de ". $title ."</h1>
        <main>";
        $files = scandir(".");
        foreach ($files as $file) {
            if (substr($file, -4) == ".txt") {
                echo "<article>";
                echo "<h2>" . substr($file, 0, -4) . "</h2>";
                echo "<pre>" . file_get_contents($file) . "</pre>";
                echo "</article>";
            }
        }
        echo "</main>";
    ?>    
</body>
</html>
