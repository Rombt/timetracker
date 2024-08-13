<?php

class usersModel extends Model {
	public function __construct() {
		parent::__construct();

	}


	public function getAllUsers() {
		$sth = Database::$bd->prepare( "SELECT * FROM users " );
		$sth->execute();
		return $sth->fetchAll( PDO::FETCH_ASSOC );
	}


	public function getEmail( $userId ) {
		$sth = Database::$bd->prepare( "SELECT email FROM users WHERE id = :id" );
		$sth->bindParam( ':id', $userId );
		$sth->execute();

		if ( $sth->rowCount() > 0 ) {
			return $sth->fetchColumn();
		} else {
			return false;
		}

	}

	public function setPassword( $user_id, $password ) {

		echo $user_id;

		$updateStmt = Database::$bd->prepare( "UPDATE users SET password = :password WHERE id = :id" );
		$updateStmt->bindParam( ':password', $password );
		$updateStmt->bindParam( ':id', $user_id );
		$updateStmt->execute();

		return $updateStmt->execute();
	}







}