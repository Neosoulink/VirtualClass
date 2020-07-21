<?php

class App{
    
    private static $database;
    
    public static function getDb(){
        if(self::$database === null){
        self::$database = new Database();
        }
        return self::$database;
    }
    
    
}