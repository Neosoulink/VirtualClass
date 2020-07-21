<?php

use MongoDB\Driver\Manager;
use MongoDB\Driver\BulkWrite;
use MongoDB\Driver\Query;
use MongoDB\Driver\Exception\Exception;
use MongoDB\BSON\ObjectId;

class MongoDB
{
	private $host = "mongodb://localhost:27017";
	private $db_name = "virtual_class";

	public function getMongo()
	{
		return $mongo = new Manager($this->host);
	}

	public function insert($data, $collection)
	{

		try {

			$bulk = new BulkWrite;
			$bulk->insert($data);
			$this->getMongo()->executeBulkWrite($this->db_name .'.'. $collection, $bulk);
		} catch (Exception $e) {

			$this->errorMsg($e);
		}
	}

	public function update($id, $data, $collection)
	{

		try {

			$bulk = new BulkWrite;
			$bulk->update($id, $data);
			$this->getMongo()->executeBulkWrite($this->db_name .'.'. $collection, $bulk);
		} catch (Exception $e) {

			$this->errorMsg($e);
		}
	}


	public function delete($data, $collection)
	{

		try {

			$bulk = new BulkWrite;
			$bulk->delete($data);
			$this->getMongo()->executeBulkWrite($this->db_name .'.'. $collection, $bulk);
		} catch (Exception $e) {

			$this->errorMsg($e);
		}
	}

	public function all($collection)
	{

		try {

			$query = new Query([]);
			return $this->getMongo()->executeQuery($this->db_name .'.'. $collection, $query);
		} catch (Exception $e) {

			$this->errorMsg($e);
		}
	}


	public function filter($data, $collection)
	{

		try {

			$query = new Query($data);
			return $this->getMongo()->executeQuery($this->db_name.'.'.$collection, $query)->toArray();
		} catch (Exception $e) {

			$this->errorMsg($e);
		}
	}

	public function errorMsg(Exception $e)
	{
		echo 'Exception: ' . $e->getMessage();
		echo ' In file ' . $e->getFile();
		echo ' On line ' . $e->getLine();
		return false;
	}
}
