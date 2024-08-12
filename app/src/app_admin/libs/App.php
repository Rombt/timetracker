<?php

class App {
	public function __construct() {
		session_start();

		$get_url = isset( $_GET['url'] ) ? htmlspecialchars( $_GET['url'] ) : false;
		if ( $get_url ) {
			$url = explode( '/', rtrim( $get_url, '/' ) );
		} else {
			$url[] = "index";
		}

		$file_controller = __DIR__ . '/../controllers/' . $url[0] . 'Controller.php';

		if ( file_exists( $file_controller ) ) {

			require_once $file_controller;
			$class_name = $url[0] . "Controller";

			if ( class_exists( $class_name ) ) {
				$controller = new $class_name;
			} else {
				self::showError( 'Controller class does not exist!!!' );
			}
			if ( isset( $url[1] ) ) {

				if ( method_exists( $controller, $url[1] ) ) {

					if ( isset( $url[2] ) ) {
						$controller->{$url[1]}( $url[2] );
					} else {
						$controller->{$url[1]}();
					}

				} else {
					self::showError( 'Method does not exist in this controller !!!' );
				}

			} else {
				$controller->index();
			}


		} else {
			self::showError( 'Controller does not exist!!!' );
		}
	}

	static function showError( $error ) {
		echo '<h1 style="color:red;"> Error!   ' . $error . '</h1>';
	}

	static function dump( $param ) {
		echo '<pre>';
		var_dump( $param );
		echo '</pre>';
	}

}