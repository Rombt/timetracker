<?php

class workareaModel extends Model {
	public function __construct() {
		parent::__construct();

	}

	// public function seed( $data ) {


	// try {
	// 	$sth = $this->database->bd->prepare( "INSERT INTO users (username, email, password, role) VALUES (:username, :email, :password, :role)" );
	// 	$sth->execute( $data );
	// 	return $this->database->bd->lastInsertId();
	// } catch (PDOException $error) {
	// 	return $error;
	// }

	// $pdo = new PDO( 'mysql:host=localhost;dbname=your_database_name', 'username', 'password' );
	// $seeder = new workareaSeeder( $pdo );



	// }


}