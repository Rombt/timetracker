<?php

class Controller {
	protected $view;
	protected $name_model;
	protected $model;
	protected $name_seeder;
	protected $seeder;
	protected $errors = [];

	public function __construct() {
		$this->view = new View;

		$this->name_model = $this->getBaseNameByController() . 'Model';
		if ( file_exists( DIR_PATH_APP_ADMIN . '/models/' . $this->name_model . '.php' ) ) {
			require_once DIR_PATH_APP_ADMIN . '/models/' . $this->name_model . '.php';
			$this->model = new $this->name_model;
		}

		$this->name_seeder = $this->getBaseNameByController() . 'Seeder';
		if ( file_exists( DIR_PATH_APP_ADMIN . '/models/seeders/' . $this->name_seeder . '.php' ) ) {
			require_once DIR_PATH_APP_ADMIN . '/models/seeders/' . $this->name_seeder . '.php';
			$this->seeder = new $this->name_seeder;
		}
	}

	public function index() {
		$this->view->render( get_class( $this ) );
	}


	protected function getBaseNameByController() {
		$name = get_class( $this );
		$first_index = strpos( $name, 'Controller' );
		return substr( $name, 0, $first_index );
	}



	/**
	 * 	Валидация
	 * 	можно сделать по разному по этому привожу несколько вариантов 
	 * 
	 */



	public function validateUserName( $user_name ) {
		if ( empty( $user_name ) || strlen( $user_name ) < 3 || strlen( $user_name ) > 255 ) {
			$errors['username'] = "Username must be between 3 and 255 characters.";
		}
		// проверка уникальности лучше организовать на стороне SQL но можно и здесь
		// elseif (!$this->model->userNameExist( $user_name )){
		// 	return false;
		// }
		else {
			return true;
		}

	}


	public function validateEmail( $email ) {
		if ( empty( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) || strlen( $email ) > 255 ) {
			return false;
		}
		// проверка уникальности лучше организовать на стороне SQL но можно и здесь
		// elseif (!$this->model->emailExist( $email )){
		// 	return false;
		// }
		else {
			return true;
		}
	}

	public function validatePassword( $password ) {

		if ( empty( $password ) || strlen( $password ) < 8 ) {
			return false;
		}
		// elseif (){
		// Проверка сложности пароля (добавить при необходимости)
		// Пример: наличие цифр, спецсимволов и т.д.
		// }
		else {
			return true;
		}
	}

	protected function isValidDateFormat( $date ) {
		$regex = '/^\d{4}-\d{2}-\d{2}$/';
		if ( preg_match( $regex, $date ) ) {
			$dateParts = explode( '-', $date );
			return checkdate( $dateParts[1], $dateParts[2], $dateParts[0] );
		}

		return false;
	}

	protected function isValidIdFormat( $id ) {
		if ( ! is_numeric( $id ) ) {
			return false;
		}
		return true;
	}

	protected function isValidHoursFormat( $hours ) {
		if ( ! is_numeric( $hours ) || $hours > 24 ) {
			return false;
		}
		return true;
	}



	public function validateForm( $data ) {

		if ( empty( $data['username'] ) ) {
			$this->errors['username'] = 'Login is required.';
		} elseif ( ! preg_match( '/^[a-zA-Z0-9_]{3,20}$/', $data['username'] ) ) {
			$this->errors['username'] = 'Login must be 3-20 characters long and contain only letters, numbers, and underscores.';
		}

		if ( empty( $data['email'] ) ) {
			$this->errors['email'] = 'Email is required.';
		} elseif ( ! filter_var( $data['email'], FILTER_VALIDATE_EMAIL ) ) {
			$this->errors['email'] = 'Invalid email format.';
		}

		if ( empty( $data['password'] ) ) {
			$this->errors['password'] = 'Password is required.';
		} elseif ( strlen( $data['password'] ) < 6 ) {
			$this->errors['password'] = 'Password must be at least 6 characters long.';
		}

		if ( empty( $data['passwordConfirm'] ) ) {
			$this->errors['passwordConfirm'] = 'Password confirmation is required.';
		} elseif ( $data['password'] !== $data['passwordConfirm'] ) {
			$this->errors['passwordConfirm'] = 'Passwords do not match.';
		}

		if ( ! empty( $this->errors ) ) {
			return false;
		}

		return true;

	}



}