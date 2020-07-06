<?php
define('HOST',"localhost");
define("USERNAME","root");
define("PASS","");
define("DB_NAME","icare");
$conn = mysqli_connect(HOST,USERNAME,PASS,DB_NAME);

if (mysqli_connect_errno()) {
	printf("Connection failed: %s\n", mysqli_connect_error());
	exit(); 
}

date_default_timezone_set('Africa/Lagos');

?>