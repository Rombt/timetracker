<?php

class Model {

	public $database;

	public function __construct() {
		$this->database = new Database;


		if ( $this->database->getConnect() === null ) {
			App::showError( "Failed to connect to the database." );
			return;
		}

		$this->database->createDatabaseAndTables();
	}



	public function emailExist( $email ) {
		$sth = $this->database->bd->prepare( "SELECT id FROM users WHERE email = :email" );
		$sth->execute( [ ':email' => $email ] );

		if ( $sth->rowCount() > 0 ) {
			return true;
		} else {
			return false;
		}
	}

}