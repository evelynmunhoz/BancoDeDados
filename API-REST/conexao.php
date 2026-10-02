<?php

$host = "192.168.10.86";
$senha = "docinho";
$banco = "lojasegundao";
$usuario = "postgres";

$pdo = new PDO(
"pgsql:host=$host;port=5432;dbname=$banco", 
         $usuario,
         $senha
);
