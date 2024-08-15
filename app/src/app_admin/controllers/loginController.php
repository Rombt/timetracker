<?php


class loginController extends Controller {
	public function __construct() {
		parent::__construct();

		$this->view->setTitle( 'logIn / LogOut' );
	}



	function login() {

		$data['email'] = htmlspecialchars( $_POST['email'] );
		$data['password'] = htmlspecialchars( $_POST['password'] );


		if ( ! $this->validateEmail( $data['email'] ) ) {
			http_response_code( 401 );
			echo json_encode( [ 'error' => 'There is no user with this email' ] );
			die;
		}



		if ( ! $user = $this->model->authorization( $data ) ) {
			http_response_code( 403 );
			echo json_encode( [ 'error' => 'Access Forbidden' ] );
			die;
		}




		User::login( $user );
		echo json_encode( [ 'redirectUrl' => URL . '/workarea/' ] );


	}

	public function logout() {
		User::logOut();
		header( 'Location:' . URL );
	}

}