<?php

class User {


	static function login( $user ) {

		$_SESSION['LOGIN'] = true;
		$_SESSION['USER_ID'] = $user['id'];
		$_SESSION['USER_NAME'] = $user['username'];
		$_SESSION['USER_ROLE'] = $user['role'];
	}

	static function isLogin() {
		if ( isset( $_SESSION['LOGIN'] ) && $_SESSION['LOGIN'] ) {
			return true;
		} else {
			return false;
		}
	}
	static function isAdmin() {
		if ( isset( $_SESSION['USER_ROLE'] ) && $_SESSION['USER_ROLE'] === ADMIN_ROLE ) {
			return true;
		} else {
			return true;
		}
	}
	static function getID() {
		if ( isset( $_SESSION['USER_ID'] ) ) {
			return $_SESSION['USER_ID'];
		} else {
			return true;
		}
	}
	static function logOut() {
		session_destroy();
	}


}