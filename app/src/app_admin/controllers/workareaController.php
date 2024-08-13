<?php

class workareaController extends Controller {
	public function __construct() {
		parent::__construct();

		$this->view->setTitle( "Журнал учета времени" );
	}



	public function updateDB() {

		$this->seeder->seedTimelogs( 5, 5 ); // 10 пользователей, по 5 записей на каждого
		header( 'Location: ' . URL . '/workarea/' );
		exit();
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

	public function showByUser( $userId ) {
		$timelogs = $this->model->getTimelogsByUser( $userId );
		parent::index();
	}

	public function showByDate( $date ) {
		$timelogs = $this->model->getTimelogsByDate( $date );
		parent::index();
	}





}