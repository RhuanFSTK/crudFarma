<?php

$host = "127.0.0.1";
$usuario = "root";
$senha = "root";
$db = "farma";

// Conexão
$mysqli = new mysqli($host, $usuario, $senha, $db);

// Verifica se ocorreu algum erro na conexão
if ($mysqli->error) {
    die("Erro na conexão: " . $conn->error);
}

