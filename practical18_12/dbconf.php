<?php

define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME', 'Library');
try{
	
$connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

if (!$connect) {
	die("connection failed".mysqli_connect_error()); //die - stop process after that
} else {
	//echo "Connection successfully <br>";
	}
}
catch (Exception $e){
	die($e->getMessage());
}

?>