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
		$sth = Database::$bd->prepare( "SELECT id FROM users WHERE email = :email" );
		$sth->execute( [ ':email' => $email ] );

		if ( $sth instanceof PDOException ) {
			return $sth;
		} elseif ( $sth->rowCount() > 0 ) {
			return true;
		} else {
			return false;
		}
	}
	public function userNameExist( $user_name ) {
		$sth = Database::$bd->prepare( "SELECT id FROM users WHERE username = :username" );
		$sth->execute( [ ':email' => $user_name ] );

		if ( $sth instanceof PDOException || $sth->rowCount() === 0 ) {
			return false;
		} else {
			return true;
		}
	}
	public function dataExist( $date, $user_id ) {
		$sth = Database::$bd->prepare( "SELECT id FROM timelogs WHERE user_id = :user_id AND day = :day" );
		$sth->execute( [ ':user_id' => $user_id, ':day' => $date ] );

		if ( $sth instanceof PDOException || $sth->rowCount() === 0 ) {
			return false;
		} else {
			return true;
		}
	}

}