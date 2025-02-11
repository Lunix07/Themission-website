<?php
	// Database credentials
	define('DB_SERVER', 'localhost');
	define('DB_email', 'themissi_user');
	define('DB_PASSWORD', 'uGz1lgdRc~9Y');
	define('DB_NAME', 'themissi_platform');

	// Attempt to connect to MySQL database
	$mysql_db = new mysqli(DB_SERVER, DB_email, DB_PASSWORD, DB_NAME);

	if (!$mysql_db) {
		die("Error: Unable to connect " . $mysql_db->connect_error);
	}