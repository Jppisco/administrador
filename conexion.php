<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'proyecto';
$conexion = @mysqli_connect($host, $user, $password, $db);
if (!$conexion) {
	echo "Error";
} else {
	echo "";
}
