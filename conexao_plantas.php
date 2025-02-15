<?php
//Db plantas
$host = "localhost";
$usuario = "postgres";
$senha = "4356"; 
$banco = "plantas";
$port = "5432";

$conexao = pg_connect("host=$host port=$port dbname=$banco user=$usuario password=$senha");

if (!$conexao) {
    die("Falha na conexão com PostgreSQL.");
}
?> 
