<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->connect_errno){
    die("Falha ao conectar ao banco de dados:" . $mysqli->connect_errno);
}

?>