<?php

class Model {

	public $database;

	public function __construct() {
		$this->database = new Database;
		$this->database->getConnect();
		$this->database->createDatabaseAndTables();
	}

}