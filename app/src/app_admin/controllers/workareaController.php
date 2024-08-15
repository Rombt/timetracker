<?php

class workareaController extends Controller {
	public function __construct() {
		parent::__construct();

		$this->view->setTitle( "Журнал учета времени" );
	}

	public function index() {

		if ( User::isAdmin() ) {
			$timelogs = $this->model->getAllTimelogs();
		} else {
			$timelogs = $this->model->getTimelogsByUser( User::getID() );
		}
		$this->view->arrResults['TIME_LOG'] = $timelogs;

		parent::index();
	}

	public function updateDB() {

		$this->seeder->seedTimelogs( 5, 5 ); // 5 пользователей, по 5 записей на каждого
		header( 'Location: ' . URL . '/workarea/' );
		exit();
	}

	public function showByUser( $userId ) {
		$timelogs = $this->model->getTimelogsByUser( $userId );
		parent::index();
	}

	public function showByDate( $date ) {
		$timelogs = $this->model->getTimelogsByDate( $date );
		parent::index();
	}

	public function editEntry() {


		$entry_id = htmlspecialchars( $_POST['entry_id'] );
		if ( $_POST['action'] === 'getEntry' ) {

			echo json_encode( $this->model->getEntry( $entry_id ) );
			die;

		} elseif ( $_POST['action'] === 'updateEntry' ) {


			$dataEntry['entry_id'] = htmlspecialchars( $_POST['entry_id'] );
			if ( ! $this->isValidIdFormat( $dataEntry['entry_id'] ) ) {
				http_response_code( 500 );
				echo json_encode( [ 'error' => "ID не соответствует формату" ] );
				die;
			}

			$dataEntry['hours'] = htmlspecialchars( $_POST['hours'] );
			if ( ! $this->isValidHoursFormat( $dataEntry['hours'] ) ) {
				http_response_code( 500 );
				echo json_encode( [ 'error' => "Количество часов должны быть числами или оно слишком большое" ] );
				die;
			}

			$dataEntry['comment'] = htmlspecialchars( $_POST['comment'] );

			$resultUpdate = $this->model->updateEntry( $dataEntry );

			if ( $resultUpdate instanceof PDOException ) {
				http_response_code( 500 );
				echo json_encode( [ 'error' => $resultUpdate->getMessage() ] );
				die;
			} else {
				echo json_encode( [ 'success' => 'Entry was updated' ] );
				die;
			}
		}

	}


	public function addEntry() {

		$dataEntry['user_name'] = htmlspecialchars( $_POST['user_name'] );
		$dataEntry['hours'] = htmlspecialchars( $_POST['hours'] );
		$dataEntry['day'] = htmlspecialchars( $_POST['date'] );
		$dataEntry['comment'] = htmlspecialchars( $_POST['comment'] );
		$dataEntry['user_id'] = User::getUserIdByUsername( $dataEntry['user_name'] );

		if ( $this->model->dataExist( $dataEntry['day'], $dataEntry['user_id'] ) ) {
			http_response_code( 500 );
			echo json_encode( [ 'error' => "Такая дата уже существует" ] );
			die;
		}


		if ( ! $this->isValidDateFormat( $dataEntry['day'] ) ) {
			http_response_code( 500 );
			echo json_encode( [ 'error' => "Неправильный формат даты. Дата должна быть в формате 'YYYY-MM-DD'." ] );
			die;
		}


		if ( ! is_numeric( $dataEntry['hours'] ) || $dataEntry['hours'] > 24 ) {
			http_response_code( 500 );
			echo json_encode( [ 'error' => "Количество часов должны быть числами или оно слишком большое" ] );
			die;
		}


		$resultInsert = $this->model->insertEntry( $dataEntry );


		if ( $resultInsert instanceof PDOException ) {

			if ( $resultInsert->getCode() === '23000' ) {
				http_response_code( 409 );
				echo json_encode( [ 'error' => "This entries already exists" ] );
			}
			// elseif () {
			// }

			die;
		}


		echo json_encode( [ 'success' => 'Entry was insert' ] );
		die;
	}


}