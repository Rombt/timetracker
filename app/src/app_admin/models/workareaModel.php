<?php

class workareaModel extends Model {
	public function __construct() {
		parent::__construct();

	}

	public function getAllTimelogs() {
		$sth = Database::$bd->prepare( "
			SELECT timelogs.id, users.username, timelogs.hours, timelogs.day, timelogs.comment
			FROM timelogs
			JOIN users ON timelogs.user_id = users.id
		" );
		$sth->execute();
		return $sth->fetchAll( PDO::FETCH_ASSOC );
	}

	public function getTimelogsByUser( $userId ) {
		$sth = Database::$bd->prepare( "SELECT * FROM timelogs WHERE user_id = :user_id" );
		$sth->bindValue( ':user_id', $userId, PDO::PARAM_INT );
		$sth->execute();
		return $sth->fetchAll( PDO::FETCH_ASSOC );
	}

	public function getEntry( $id ) {
		$sth = Database::$bd->prepare( "SELECT * FROM timelogs WHERE id = :id" );
		$sth->bindValue( ':id', $id, PDO::PARAM_INT );
		$sth->execute();
		return $sth->fetchAll( PDO::FETCH_ASSOC );
	}

	public function updateEntry( $dataEntry ) {

		$sth = Database::$bd->prepare( "
        UPDATE timelogs 
        SET hours = :hours, comment = :comment 
        WHERE id = :id
    " );

		$sth->bindValue( ':id', $dataEntry['entry_id'], PDO::PARAM_INT );
		$sth->bindValue( ':hours', $dataEntry['hours'], PDO::PARAM_INT );
		$sth->bindValue( ':comment', $dataEntry['comment'], PDO::PARAM_STR );

		try {
			return $sth->execute();
		} catch (PDOException $error) {
			return $error;
		}

	}
	public function insertEntry( $dataEntry ) {

		$sth = Database::$bd->prepare( "
        INSERT INTO timelogs (user_id, hours, day, comment) 
        VALUES (:user_id, :hours, :day, :comment)
    " );

		$sth->bindValue( ':user_id', $dataEntry['user_id'], PDO::PARAM_INT );
		$sth->bindValue( ':hours', $dataEntry['hours'], PDO::PARAM_INT );
		$sth->bindValue( ':day', $dataEntry['day'], PDO::PARAM_STR );
		$sth->bindValue( ':comment', $dataEntry['comment'], PDO::PARAM_STR );

		try {
			return $sth->execute();
		} catch (PDOException $error) {
			return $error;
		}
	}

}