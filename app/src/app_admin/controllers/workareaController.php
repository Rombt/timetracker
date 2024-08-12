<?php

class workareaController extends Controller {
	public function __construct() {
		parent::__construct();

		$this->view->setTitle( "Журнал учета времени" );
	}



	public function updateDB() {

		echo "<pre>";
		var_dump( $this );
		echo "</pre>";


		$date = $this->seeder->seedTimelogs( 10, 5 ); // 10 пользователей, по 5 записей на каждого



	}

}