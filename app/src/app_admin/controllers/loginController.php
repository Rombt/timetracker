<?php


class loginController extends Controller {
	public function __construct() {
		parent::__construct();

		$this->view->setTitle( 'logIn / LogOut' );
	}



	function login() {

		$data['email'] = htmlspecialchars( $_POST['email'] );
		$data['password'] = htmlspecialchars( $_POST['password'] );

		if ( $this->model->emailExist( $data['email'] ) ) {


			if ( $user = $this->model->authorization( $data ) ) {

				User::login( $user );
				echo json_encode( [ 'redirectUrl' => URL . '/workarea/' ] );
			} else {
				http_response_code( 403 );
				echo json_encode( [ 'error' => 'Access Forbidden' ] );
				die;
			}


		}
	}

	public function logout() {
		User::logOut();
		header( 'Location:' . URL );
	}

}