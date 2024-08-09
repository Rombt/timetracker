<?php



class Database {
	private $host = DB_HOST;
	private $db_name = DB_NAME;
	private $username = DB_USER;
	private $password = DB_PASS;
	private static $connect = null;


	public function __construct() {

	}



	public function getConnect() {

		if ( self::$connect !== null ) {
			return self::$connect;
		}

		if ( empty( $this->host ) || empty( $this->db_name ) || empty( $this->username ) ) {
			App::showError( "BD Error!   Incomplete data for connecting to the database" );
		}

		try {
			self::$connect = new PDO( "mysql:host=" . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password );

		} catch (PDOException $exception) {
			App::showError( "BD Error!    Connection error: " . $exception->getMessage() );
			die;
		}

	}



	public function createDatabaseAndTables() {
		try {
			self::$connect->exec( "CREATE DATABASE IF NOT EXISTS $this->db_name" );
			self::$connect->exec( "USE $this->db_name" );

			$createUsersTableSQL = "
           CREATE TABLE IF NOT EXISTS users (
               id INT AUTO_INCREMENT PRIMARY KEY,
               username VARCHAR(255) NOT NULL UNIQUE,
               email VARCHAR(255) NOT NULL UNIQUE,
               password VARCHAR(255) NOT NULL,
               role ENUM('admin', 'operator') NOT NULL
           )";
			self::$connect->exec( $createUsersTableSQL );


			$createTimelogsTableSQL = "
           CREATE TABLE IF NOT EXISTS timelogs (
               id INT AUTO_INCREMENT PRIMARY KEY,
               user_id INT NOT NULL,
               hours INT NOT NULL,
               day DATE NOT NULL,
               comment TEXT,
               FOREIGN KEY (user_id) REFERENCES users(id)
           )";
			self::$connect->exec( $createTimelogsTableSQL );


		} catch (PDOException $exception) {
			App::showError( "Error creating database or tables: " . $exception->getMessage() );
		}
	}


	private function tableExists( $tableName ) {
		try {
			$result = self::$connect->query( "SELECT 1 FROM information_schema.tables WHERE table_schema = '$this->db_name' AND table_name = '$tableName' LIMIT 1" );
			return $result !== false && $result->rowCount() > 0;
		} catch (PDOException $exception) {
			App::showError( "Error checking table existence: " . $exception->getMessage() );
			return false;
		}
	}

}