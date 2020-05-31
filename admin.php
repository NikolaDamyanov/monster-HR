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
<body>
<div id="admin-header">
            <div id="admin-header-placeholder">
                <ul>
                    <!-- <li><a href="logout.php">Log out</a></li> -->
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