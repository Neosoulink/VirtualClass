<?php
class PDOFactory{
	public static function getMysqlConnexion(){
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=virtual_class;charset=utf8', 'root', '');
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			return $bdd;
		} catch (Exception $e) {
			return '[Exception] : '. $e->getMessage();
		}
	}

	public static function getPgsqlConnexion(){
		$db = new PDO('pgsql:host=localhost;dbname=virtual_class;charset=utf8', 'root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $db;
	}
}
	
