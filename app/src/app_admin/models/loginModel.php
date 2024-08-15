<?php

class loginModel extends Model {
	public function __construct() {
		parent::__construct();
	}



	public function authorization( $data ) {

		$sth = Database::$bd->prepare( "SELECT id, username, role, password FROM users WHERE email = :email" );
		$sth->execute( [ ':email' => $data['email'] ] );
		$user = $sth->fetch( PDO::FETCH_ASSOC );

		if ( $user && password_verify( $data['password'], $user['password'] ) ) {
			return $user;
		} else {
			return false;
		}
	}
}