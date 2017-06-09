<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>new Article</title>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <form action="article_creator.php" method="post">
        <label for="title_article">Title :</label>
        <input type="text" name="title_article">
        <label for="content_article">Text :</label>
        <textarea name="content_article"></textarea>
        <input type="submit" value="create article">
    </form>
</body>
</html>