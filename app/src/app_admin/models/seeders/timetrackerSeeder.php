<?php

class timetrackerSeeder {
	private $bd;

	public function __construct( $pdo ) {
		$this->bd = $pdo;
	}

	public function seedTimelogs( $numUsers, $numRecordsPerUser = 5 ) {
		$userIds = $this->getUserIds( $numUsers );

		$insertSQL = "
            INSERT INTO timelogs (user_id, hours, day, comment)
            VALUES (:user_id, :hours, :day, :comment)
        ";
		$stmt = $this->bd->prepare( $insertSQL );

		foreach ( $userIds as $userId ) {
			for ( $i = 0; $i < $numRecordsPerUser; $i++ ) {
				$hours = rand( 1, 8 ); // Случайное количество часов от 1 до 8
				$day = $this->randomDate( '2023-01-01', '2023-12-31' ); // Случайная дата в 2023 году
				$comment = $this->randomComment(); // Случайный комментарий

				$stmt->execute( [ 
					':user_id' => $userId,
					':hours' => $hours,
					':day' => $day,
					':comment' => $comment,
				] );
			}
		}
	}

	private function getUserIds( $limit ) {
		$stmt = $this->bd->prepare( "SELECT id FROM users LIMIT :limit" );
		$stmt->bindValue( ':limit', $limit, PDO::PARAM_INT );
		$stmt->execute();
		return $stmt->fetchAll( PDO::FETCH_COLUMN );
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

// Пример использования:
$pdo = new PDO( 'mysql:host=localhost;dbname=your_database_name', 'username', 'password' );
$seeder = new TimeTrackerSeeder( $pdo );
$seeder->seedTimelogs( 10, 5 ); // 10 пользователей, по 5 записей на каждого

?>