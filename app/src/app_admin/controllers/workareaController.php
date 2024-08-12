<?php

class workareaController extends Controller {
	public function __construct() {
		parent::__construct();

		$this->view->setTitle( "Журнал учета времени" );
	}

}