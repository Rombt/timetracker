<?php

class registrationModel extends Model {
	public function __construct() {
		parent::__construct();

	}

	public function registration( $data ) {


		try {
			$sth = $this->database->bd->prepare( "INSERT INTO users (username, email, password, role) VALUES (:username, :email, :password, :role)" );
			$sth->execute( $data );
			return $this->database->bd->lastInsertId();
		} catch (PDOException $error) {
			return $error;
		}

	}





}