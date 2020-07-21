<?php

class Database{

    protected $db_host = 'localhost';
    protected $db_user = 'root';
    protected $db_pass = '';
    protected $db_name = 'GDK';
    protected $pdo;

    public function __construct()
    {
    }

    public function getPDO()
    {
        if($this->pdo == null){
            $pdo = new PDO('mysql:host='.$this->db_host.';charset=utf8;dbname='.$this->db_name.'', $this->db_user, $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;


    }

    public function query($statement, $class_name = null, $one = false){
        try
        {
            $req = $this->getPDO()->query($statement);
             if($class_name === null)
            {
                $req->setFetchMode(PDO::FETCH_OBJ);
            }
            else
            {
                $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
            }

            if($one){
                $datas = $req->fetch();
            } else {
                $datas = $req->fetchAll();
            }
            return $datas;
        }
       catch(Exception $e)
        {
             // die('Erreur : '.$e->getMessage());
        }
    }

   public function prepare($statement, $attributs, $class_name, $one = false){
        try
        {

            $req = $this->getPDO()->prepare($statement);
            $req->execute($attributs);
            if($class_name === null)
            {
                $req->setFetchMode(PDO::FETCH_OBJ);
            }
            else
            {
                $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
            }
            if($one){
                $datas = $req->fetch();
            } else {
                $datas = $req->fetchAll();
            }
            return $datas;

        }
       catch(Exception $e)
        {
             // die('Erreur : '.$e->getMessage());
        }
    }
}
