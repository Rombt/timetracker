<?php



class Database {
	private $host = DB_HOST;
	private $db_name = DB_NAME;
	private $username = DB_USER;
	private $password = DB_PASS;
	public static $bd = null;


	public function __construct() {

	}

	public function getConnect() {
		if ( $this->bd !== null ) {
			return $this->bd;
		}

		if ( empty( $this->host ) || empty( $this->db_name ) || empty( $this->username ) ) {
			App::showError( "DB Error! Incomplete data for connecting to the database." );
			return null;
		}

		try {
			$this->bd = new PDO( "mysql:host=" . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password );
			$this->bd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			return $this->bd;
		} catch (PDOException $exception) {
			App::showError( "DB Error! Connection error: " . $exception->getMessage() );
			return null;
		}
	}

	public function createDatabaseAndTables() {
		if ( $this->bd === null ) {
			App::showError( "DB Error! No connection established." );
			return;
		}

		try {
			$this->bd->exec( "CREATE DATABASE IF NOT EXISTS " . $this->db_name );
			$this->bd->exec( "USE " . $this->db_name );

			$createUsersTableSQL = "
				CREATE TABLE IF NOT EXISTS users (
					id INT AUTO_INCREMENT PRIMARY KEY,
					username VARCHAR(255) NOT NULL UNIQUE,
					email VARCHAR(255) NOT NULL UNIQUE,
					password VARCHAR(255) NOT NULL,
					role ENUM('admin', 'operator') NOT NULL
				)";
			$this->bd->exec( $createUsersTableSQL );

			$createTimelogsTableSQL = "
				CREATE TABLE IF NOT EXISTS timelogs (
					id INT AUTO_INCREMENT PRIMARY KEY,
					user_id INT NOT NULL,
					hours INT NOT NULL,
					day DATE NOT NULL,
					comment TEXT,
					FOREIGN KEY (user_id) REFERENCES users(id)
				)";
			$this->bd->exec( $createTimelogsTableSQL );

		} catch (PDOException $exception) {
			App::showError( "Error creating database or tables: " . $exception->getMessage() );
		}
	}

	private function tableExists( $tableName ) {
		if ( $this->bd === null ) {
			App::showError( "DB Error! No connection established." );
			return false;
		}

		try {
			$result = $this->bd->query( "SELECT 1 FROM information_schema.tables WHERE table_schema = '" . $this->db_name . "' AND table_name = '" . $tableName . "' LIMIT 1" );
			return $result !== false && $result->rowCount() > 0;
		} catch (PDOException $exception) {
			App::showError( "Error checking table existence: " . $exception->getMessage() );
			return false;
		}
	}
}