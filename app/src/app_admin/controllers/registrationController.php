<?php


class registrationController extends Controller {

	protected $login;
	protected $email;
	protected $password;
	protected $passwordConfirm;

	protected $errors = [];


	public function __construct() {
		parent::__construct();
		$this->view->setTitle( 'logIn / LogOut' );
	}


	public function formProcessing() {

		$this->login = htmlspecialchars( $_POST['login'] );
		$this->email = htmlspecialchars( $_POST['email'] );
		$this->password = htmlspecialchars( $_POST['password'] );
		$this->passwordConfirm = htmlspecialchars( $_POST['passwordConfirm'] );


		if ( ! $this->validateForm() ) {
			http_response_code( 400 );
			echo json_encode( $this->errors );
			die;
		}
		;

		$data = [ 
			"username" => $this->login,
			"email" => $this->email,
			"password" => password_hash( $this->password, PASSWORD_DEFAULT ),
			"role" => 'operator',
		];

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






	protected function validateForm() {

		if ( empty( $this->login ) ) {
			$this->errors['login'] = 'Login is required.';
		} elseif ( ! preg_match( '/^[a-zA-Z0-9_]{3,20}$/', $this->login ) ) {
			$this->errors['login'] = 'Login must be 3-20 characters long and contain only letters, numbers, and underscores.';
		}

		if ( empty( $this->email ) ) {
			$this->errors['email'] = 'Email is required.';
		} elseif ( ! filter_var( $this->email, FILTER_VALIDATE_EMAIL ) ) {
			$this->errors['email'] = 'Invalid email format.';
		}

		if ( empty( $this->password ) ) {
			$this->errors['password'] = 'Password is required.';
		} elseif ( strlen( $this->password ) < 6 ) {
			$this->errors['password'] = 'Password must be at least 6 characters long.';
		}

		if ( empty( $this->passwordConfirm ) ) {
			$this->errors['passwordConfirm'] = 'Password confirmation is required.';
		} elseif ( $this->password !== $this->passwordConfirm ) {
			$this->errors['passwordConfirm'] = 'Passwords do not match.';
		}

		if ( ! empty( $this->errors ) ) {
			return false;
		}

		return true;

	}

}