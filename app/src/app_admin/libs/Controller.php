<?php

class Controller {
	protected $view;

	public function __construct() {

		$this->view = new View;
	}

	public function index() {


		$this->view->render( get_class( $this ) );
	}
}