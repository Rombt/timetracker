<?php

define( 'URL', getDomain() . '/timetracker' );
define( 'DIR_PATH_APP_ADMIN', __DIR__ . '/..' );

define( 'TEMPLATE_PATH', DIR_PATH_APP_ADMIN . '/views' );
define( 'ASSETS_PATH', DIR_PATH_APP_ADMIN . '/../assets' );


define( 'DB_NAME', 'timetracker' );
define( 'DB_HOST', 'localhost:3306' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );








function getDomain() {
	$protocol = ( ! empty( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] !== 'off' ) ? "https" : "http";
	return $protocol . '://' . $_SERVER['HTTP_HOST'];
}