<?php

class Controller {
	protected $view;
	protected $name_model;
	protected $model;
	protected $name_seeder;
	protected $seeder;

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





}