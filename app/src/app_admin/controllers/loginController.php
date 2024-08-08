<?php


class loginController extends Controller {
	public function __construct() {
		parent::__construct();

		$this->view->setTitle( 'logIn / LogOut' );
	}

}