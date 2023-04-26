<?php
$dsn='mysql:dbname=proyecto;host:localhost';
$usuario='root';
$contraseña='';
try{
	$pdo=new PDO($dsn,$usuario,$contraseña);
} catch (PDOException $e) {
	echo "Fallo la conexion";
$e->getMessage();
}
?>