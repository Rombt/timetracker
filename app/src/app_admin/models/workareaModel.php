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

}