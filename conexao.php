<?php

$hostname = "http://127.0.0.1:3306";
$bancodedados = "infos";
$usuario = "root";
$senha = "7341329175";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
	echo "Falha ao conectar: (". $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>