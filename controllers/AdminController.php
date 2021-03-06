<?php

namespace controllers;

class AdminController {
    
    public function index() {

        if(\user\User::isNotLoged()) {
            return redirect('index');
        }
        
        if(\user\User::isRegular()) {
            return redirect('index');
        }
                
        if(isset($_GET['action']) &&  $_GET['action'] == 'logout') {
            return $this->logout();
        }
        
        if(isset($_POST['post_tokken']) && $_POST['post_tokken'] == 1) {
            return $this->createBlogPost();
        }
    }
    
    private function createBlogPost() {
        
        $blogPostTitle   = $_POST['post_title'];
        $blogPostPreview = $_POST['post_preview'];
        $blogPostContent = $_POST['post_content'];
        
        $postId = \blogpost\BlogPost::create($blogPostTitle, $blogPostPreview, $blogPostContent); 
        
        if($postId) {
            
        
            \session\Session::setFlashMessage('create_blog_post', 'Новия пост е успешно създаден'); 
            redirect('admin');  
        }
    }
    
    
    private function logout() {
        
        \user\User::logout();
        return redirect('index');        
    }
}