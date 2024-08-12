<?php

class workareaController extends Controller {
	public function __construct() {
		parent::__construct();

		$this->view->setTitle( "Журнал учета времени" );
	}



	public function updateDB() {


		$this->seeder->seedTimelogs( 10, 5 ); // 10 пользователей, по 5 записей на каждого
	}

}