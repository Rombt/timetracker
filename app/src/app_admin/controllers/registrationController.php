<?php


class registrationController extends Controller {

	protected $login;
	protected $email;
	protected $password;
	protected $passwordConfirm;




	public function __construct() {
		parent::__construct();
		$this->view->setTitle( 'logIn / LogOut' );
	}


	public function formProcessing() {

		$data = [ 
			"username" => htmlspecialchars( $_POST['login'] ),
			"email" => htmlspecialchars( $_POST['email'] ),
			"password" => $_POST['password'],
			"passwordConfirm" => htmlspecialchars( $_POST['passwordConfirm'] ),
			"role" => 'operator',
		];


		if ( ! $this->validateForm( $data ) ) {
			http_response_code( 400 );
			echo json_encode( $this->errors );
			die;
		}

		$data["password"] = password_hash( htmlspecialchars( $_POST['password'] ), PASSWORD_DEFAULT );
		unset( $data["passwordConfirm"] );
		$idUser = $this->model->registration( $data );

		if ( $idUser instanceof PDOException ) {
			if ( $idUser->getCode() === '23000' ) {
				http_response_code( 409 );
				echo json_encode( [ 'error' => "This USER already exists" ] );
			} else {
				http_response_code( 500 );
				echo json_encode( [ 'error' => $idUser->getMessage() ] );
			}
			die;
		} else {

			$data['id'] = $idUser;
			User::login( $data );
			echo json_encode( [ 'redirectUrl' => URL . '/workarea/' ] );
			die;
		}

	}


}