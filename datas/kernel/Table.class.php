<?php

class Table
{

	public static function query($methode, $data, $collection, $id = null)
	{
		switch ($methode) {
			case 'insert':
				return App::getDb()->insert($data, $collection);
				break;

			case 'update':
				return App::getDb()->update($id, $data, $collection);
				break;

			case 'delete':
				return App::getDb()->delete($data, $collection);
				break;
		}
	}

	public static function all($collection)
	{
		return App::getDb()->all($collection);
	}

	public static function filter($data, $collection)
	{
		return App::getDb()->filter($data, $collection);
	}
}
