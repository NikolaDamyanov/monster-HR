<?php
    include './external_autoload.php';
    
    $indeControllerReference = new controllers\IndexController();
    $indeControllerReference->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MonsterHR</title>
</head>

<link rel="stylesheet" href="/monster HR/style/style.css">

<body>
    <div class="header">
        <h1 class="title">ЧУДОВИЩНИ HR УСЛУГИ</h1>
        <div class="navbar">
            <a href="http://monster HR/index.php">Начало</a>
            <a href="http://monster HR/options.php">Възможности</a>
            <a href="http://monster HR/registrationemployers.php">Регистрация работодатели</a>
            <a href="http://monster HR/registration.php">Регистрация потребители</a>
            <a href="http://monster HR/login.php">ВХОД</a>
        </div>
    </div>
    <?php
    foreach ($indeControllerReference->getBlogPostCollection() as $value) {
                    
                    echo "<div class='post'>";
                    echo "<header class='post-title'>{$value['title']}</header>";
                    echo "<div class='post-timestamp'>преди 1 час</div>";
                    echo "<a href='#'> - </a>";
                    echo "</div>";
                 }
 
     ?>


</body>
</html>
