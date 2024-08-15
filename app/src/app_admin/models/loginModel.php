<?php

class loginModel extends Model {
	public function __construct() {
		parent::__construct();
	}



	public function authorization( $data ) {


		// var_dump( $data );

		$password = password_hash( $data['password'], PASSWORD_DEFAULT );
		// $sth = $this->database->bd->prepare( "SELECT id, username, role FROM users WHERE email = :email AND password = :password" );
		// $sth->execute( [ ':email' => $data['email'], ':password' => $password ] );



		$sth = Database::$bd->prepare( "SELECT id, username, role, password FROM users WHERE email = :email" );
		$sth->execute( [ ':email' => $data['email'] ] );

		$user = $sth->fetch( PDO::FETCH_ASSOC );

		// var_dump( $user );

		var_dump( password_verify( $password, $user['password'] ) );



		if ( $user && password_verify( $password, $user['password'] ) ) {
			return $user;
		} else {
			return false;
		}
	}
}