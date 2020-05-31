<?php

namespace blogpost;

class BlogPost {
 
    public static function create($title, $previewContent, $content) {
        
        $query = "INSERT INTO monsterhr.monsterhr_post(title, content) "
                . "VALUES('{$title}', '{$content}')";
                
        \db\Database::getInstance()->query($query);
        return \db\Database::getInstance()->lastInsertedId();
    }

    public static function fetch($id = null) {

       
        
        $query = "SELECT * FROM monsterhr.monsterhr_post ";
        if($id) {
            $query = "$query WHERE id = {$id}";
        }
        
        \db\Database::getInstance()->query($query);
        return \db\Database::getInstance()->fetchCollection();
    }
}