<?php

class workareaSeeder {

	public function __construct() {
	}

	public function seedTimelogs( $numUsers, $numRecordsPerUser = 5 ) {
		$userIds = $this->getUserIds( $numUsers );

		$insertSQL = "
            INSERT INTO timelogs (user_id, hours, day, comment)
            VALUES (:user_id, :hours, :day, :comment)
        ";
		$sth = Database::$bd->prepare( $insertSQL );

		foreach ( $userIds as $userId ) {
			for ( $i = 0; $i < $numRecordsPerUser; $i++ ) {
				$hours = rand( 1, 8 );
				$day = $this->randomDate( '2024-01-01', '2024-12-31' );
				$comment = $this->randomComment();

				$sth->execute( [ 
					':user_id' => $userId,
					':hours' => $hours,
					':day' => $day,
					':comment' => $comment,
				] );
			}
		}
	}

	private function getUserIds( $limit ) {
		$sth = Database::$bd->prepare( "SELECT id FROM users LIMIT :limit" );
		$sth->bindValue( ':limit', $limit, PDO::PARAM_INT );
		$sth->execute();
		return $sth->fetchAll( PDO::FETCH_COLUMN );
	}

	private function randomDate( $startDate, $endDate ) {
		$startTimestamp = strtotime( $startDate );
		$endTimestamp = strtotime( $endDate );
		$randomTimestamp = mt_rand( $startTimestamp, $endTimestamp );
		return date( 'Y-m-d', $randomTimestamp );
	}

	private function randomComment() {
		$comments = [ 
			'Работал над проектом',
			'Участвовал в совещании',
			'Занимался тестированием',
			'Писал код',
			'Рефакторил старый код',
		];
		return $comments[ array_rand( $comments ) ];
	}
}