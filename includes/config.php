<?php

// upload directory
define('UPLOAD_DIR', 'uploads/');

// max file name length in explorer
define('FILENAME_MAX', 13);

// max number of columns in explorer
define('FILECOL_MAX', 6);

// login hashing defines
define('HASH_ALGORITHM', 'sha512');
define('HASH_COMPLEXITY', 414912);

// database credentials
define('DB_SERVER', '{db_server}');
define('DB_USERNAME', '{db_username}');
define('DB_PASSWORD', '{db_password}');
define('DB_NAME', '{db_name}');
if (DB_SERVER == "{db_server}") { header("location: install"); exit; }
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (!$mysqli) {
	die("ERROR: ".mysqli_connect_error());
}

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

?>