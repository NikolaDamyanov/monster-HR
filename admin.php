<?php
include './external_autoload.php';

(new controllers\AdminController())->index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="/monster HR/style/admin.css">
<link rel="stylesheet" href="/monster HR/style/style.css">

<body>

<div class="header">
        <h1 class="title">ЧУДОВИЩНИ HR УСЛУГИ</h1>
        <div class="navbar">
            <a href="http://nkld.eu/monster HR/index.php">Начало</a>
            <a href="http://nkld.eu/monster HR/options.php">Възможности</a>
            <a href="http://nkld.eu/monster HR/registrationemployers.php">Регистрация работодатели</a>
            <a href="http://nkld.eu/monster HR/registration.php">Регистрация потребители</a>
        <ul>       
            <li><a href="admin.php?action=logout">Log out</a></li>
        </ul>           
        </div>
</div>

        <?php
        if(\session\Session::checkFlashMessage('create_blog_post')) {
                
                echo '<div class="message success">';
                echo \session\Session::getFlashMessage('create_blog_post');
                echo '</div>';                
            }
        ?>  

 
<div id="admin-editor">
            <form method="POST" name="admin-post-editor">
                <input class="form-input" type="text" placeholder="Въведи име" name="post_title">
                <textarea class="form-textarea h-40"  placeholder="Въведи досие" name="post_preview"></textarea>
                <textarea class="form-textarea h-160"  placeholder="Обнови досие" name="post_content"></textarea>
                <input class="button" type="submit" value="ПРИЛОЖИ" name="post_submit">
                
                <input type="hidden" name="post_tokken" value="1">
            </form>
        </div>


    
</body>
</html>
