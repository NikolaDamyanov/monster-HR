<?php
include './external_autoload.php';

(new controllers\RegistrationController())->index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MonsterHR</title>
</head>

<link rel="stylesheet" href="/monster HR/style/style.css">
<link rel="stylesheet" href="/monster HR/style/monster-register.css">

<body>
    <div class="header">
        <h1 class="title">ЧУДОВИЩНИ HR УСЛУГИ-РЕГИСТРАЦИЯ ПОТРЕБИТЕЛИ</h1>
        <div class="navbar">
            <a href="http://nkld.eu/monster HR/index.php">Начало</a>
            <a href="http://nkld.eu/monster HR/registrationemployers.php">Регистрация работодатели</a>
        </div>

        <div class="wrapper">
            <form method="POST" name="registration">
                <input class="form-input" type="text" placeholder="Username" name="username">
                <input class="form-input" type="text" placeholder="E-mail" name="email">
                <input class="form-input" type="text" placeholder="Password" name="password">
                <input class="form-input" type="text" placeholder="Repeat Password" name="repeat-password">
                
                <input class="button" type="submit" name="ВХОД" value="РЕГИСТРАЦИЯ">
                <input type="hidden" name="post_tokken" value="1">
            </form>
        </div>