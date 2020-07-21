<?php

class Utility{

    public static $msg_error;
    public static $show = false;
    public static $none = false;

    public static function none()
    {
        return self::$none;
    }

    private static function show($bool = false)
    {
        return $bool;
    }

    private static function msg_error($error)
    {
        return $error;
    }

    public static function getError()
    {
        return self::$msg_error;
    }

    public static function getShow()
    {
        return self::$show;
    }

    # random matricule aleatoire numeric
    public static function random()
    {
        return rand(0,9) .rand(0,9) .rand(0,9). rand(0,9). rand(0,9);
    }


    public static function pagination()
    {

    }


    public static function sendPhoto($photo, $destination)
    {
        if(isset($photo) && !empty($photo['name']))
        {
            $taille_Max = 2097152;
            $extension_Valides = array('jpg', 'jpeg', 'png', 'gif');
            if($photo['size'] <= $taille_Max)
            {
                self::$none = true;
                $extension_Upload = strtolower(substr(strrchr($photo['name'], '.'), 1));
                if(in_array($extension_Upload, $extension_Valides))
                {
                    # $destination = '../data/photo/article/'.$photo['name'];
                    $upload = move_uploaded_file($photo['tmp_name'], $destination);
                    # var_dump($upload);
                    if($upload)
                    {
                        # Article::add($data);
                        self::$show = self::show(true);
                    }
                    else
                    {
                        self::$msg_error = self::msg_error('Erreur');
                        self::$show = self::show(false);
                        #var_dump($upload);
                    }
                }
                else
                {
                     self::$msg_error = self::msg_error('Image incorrect');
                }
            }
            else
            {
                self::$msg_error = self::msg_error('Taille de l\'image depasser');
            }
        }
        else
        {
            self::$none = false;
        }
    }


}
