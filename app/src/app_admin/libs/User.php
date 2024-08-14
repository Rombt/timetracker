<?php

class User {


	static function login( $user ) {

		$_SESSION['LOGIN'] = true;
		$_SESSION['USER_ID'] = $user['id'];
		$_SESSION['USER_NAME'] = $user['username'];
		$_SESSION['USER_ROLE'] = $user['role'];
	}

	static function isLogin() {
		if ( isset( $_SESSION['LOGIN'] ) ) {
			return true;
		} else {
			return false;
		}
	}
	static function isAdmin() {


		if ( isset( $_SESSION['USER_ROLE'] ) && $_SESSION['USER_ROLE'] === ADMIN_ROLE ) {
			return true;
		} else {
			return false;
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

	static function getUserIdByUsername( $username ) {
		$sth = Database::$bd->prepare( "
        SELECT id 
        FROM users 
        WHERE username = :username
        LIMIT 1
    " );

		$sth->bindValue( ':username', $username, PDO::PARAM_STR );
		$sth->execute();

		$user = $sth->fetch( PDO::FETCH_ASSOC );
		if ( $user ) {
			return $user['id'];
		} else {
			return false;
		}
	}







}