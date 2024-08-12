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
		if ( file_exists( DIR_PATH_APP_ADMIN . '/models/seeders' . $this->name_seeder . '.php' ) ) {
			require_once DIR_PATH_APP_ADMIN . '/models/seeders' . $this->name_seeder . '.php';
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
}