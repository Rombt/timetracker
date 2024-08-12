<?php

class loginModel extends Model {
	public function __construct() {
		parent::__construct();
	}



	public function authorization( $data ) {

		$password = password_hash( $data['password'], PASSWORD_DEFAULT );


		// $sth = $this->database->bd->prepare( "SELECT id, username, role FROM users WHERE email = :email AND password = :password" );
		// $sth->execute( [ ':email' => $data['email'], ':password' => $password ] );

		$sth = $this->database->bd->prepare( "SELECT id, username, role, password FROM users WHERE email = :email" );
		$sth->execute( [ ':email' => $data['email'] ] );

		$user = $sth->fetch( PDO::FETCH_ASSOC );

		if ( $user && password_verify( $data['password'], $user['password'] ) ) {
			return $user;
		} else {
			$user = false;
		}
	}
}