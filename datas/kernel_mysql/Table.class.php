<?php

class Table{
    
    
    public static function query($statement, $attributes = null, $one = false){
        if($attributes){
            return App::getDb()->prepare($statement, $attributes, get_called_class(), $one);
        } else { 
            return App::getDb()->query($statement, get_called_class(), $one);
        }
    }
    
    
    
}