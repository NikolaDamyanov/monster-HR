<?php
include './external_autoload.php';

(new controllers\LoginController())->index();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="/monster HR/style/monster-register.css">
<link rel="stylesheet" href="/monster HR/style/style.css">
<body>
<div class="header">
        <h1 class="title">ЧУДОВИЩНИ HR УСЛУГИ</h1>
        <div class="navbar">
            <a href="http://nkld.eu/monster HR/index.php">Начало</a>
            <a href="http://nkld.eu/monster HR/registeremployers.php">Регистрация работодатели</a>
            <a href="http://nkld.eu/monster HR/register.php">Регистрация потребители</a>
        </div>
    </div>    
<br>

<?php 
            
            if(\session\Session::checkFlashMessage('error_message')) {
                
                echo '<div class="message error">';
                echo \session\Session::getFlashMessage('error_message');
                echo '</div>';                
            }
        ?>  

<div class="wrapper">
            <form method="POST" name="registration">
                <input class="form-input" type="text" placeholder="E-mail" name="email">
                <input class="form-input" type="text" placeholder="Password" name="password">               
                <input class="button" type="submit" name="ВХОД" value="ВХОД">
                <input type="hidden" name="post_tokken" value="1">
            </form>
        </div>

















</body>
</html>
