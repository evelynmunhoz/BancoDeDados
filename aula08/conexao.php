<?php

$host = "192.168.10.86";
$usuario = "postgres";
$banco = "levelup";
$senha = "docinho";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);