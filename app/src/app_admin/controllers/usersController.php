<?php

class usersController extends Controller {
	public function __construct() {
		parent::__construct();
	}


	public function index() {

		$users = $this->model->getAllUsers();
		$this->view->arrResults['USERS'] = $users;

		parent::index();
	}


	public function resetPassword( $user_id ) {

		$newPassword = $this->generateRandomPassword();
		$hashedPassword = password_hash( $newPassword, PASSWORD_BCRYPT );
		$this->model->setPassword( $user_id, $hashedPassword );

		$email = $this->model->getEmail( $user_id );
		EmailService::sendEmail( $email, 'Your password was changed', $newPassword );

		header( 'Location: ' . URL . '/users' );
		exit;
	}

	private function generateRandomPassword( $length = 12 ) {
		return substr( str_shuffle( 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789' ), 0, $length );
	}


}