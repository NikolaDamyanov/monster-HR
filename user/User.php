<?php

namespace user;

class User {
    

    
    public static function username() {
       return $_SESSION['user_reference']['username'];
    }
    
    public static function email() {
       return $_SESSION['user_reference']['username'];
    }    
    
    public static function role() {
       return $_SESSION['user_reference']['role'];
    }
    
    public static function isLoged() {
        return isset($_SESSION['user_reference']);
    }    
    
    public static function isNotLoged() {
        return !self::isLoged();
    }
    
    public static function isAdmin() {
        return (self::role() == 0);
    }
    
    public static function isRegular() {
        return self::role() > 0;
    }    
    
    public static function set($userObject) {
        $_SESSION['user_reference'] = $userObject;

    }
    
    public static function login($email, $password) {
        
        if(User::isAvailable($email, $password)) {
            
            $queryResult = \db\Database::getInstance()->query("SELECT * FROM monsterhr.monsterhr_users WHERE email = '{$email}' AND password = '{$password}'");
            return \db\Database::getInstance()->fetch();            
        }
        
        return false;
    }
        
    public static function isAvailable($email, $password) {
        
        \db\Database::getInstance()->query("SELECT COUNT(*) AS number_of_rows FROM monsterhr.monsterhr_users WHERE email = '{$email}' AND password = '{$password}'");
        $collection = \db\Database::getInstance()->fetch();

        return ($collection['number_of_rows'] == 1);        
    }

    public static function registration($username, $email, $password) {
        
        \db\Database::getInstance()->query("INSERT INTO monsterhr.monsterhr_users(username, email, password, role) 
                        VALUES('{$username}', '{$email}', '{$password}', 1)");
                        
        if(\db\Database::getInstance()->lastInsertedId()) {
            return true;
        }
        
        return false;
    }
    
    public static function logout() {
        session_destroy();
    }    
    
}