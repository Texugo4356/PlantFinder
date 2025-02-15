<?php
// Db usuarios
define('HOST', 'localhost');  // Ou o IP do servidor PostgreSQL
define('PORT', '5432');       // Porta padrão do PostgreSQL
define('DBNAME', 'cadastro');  // Nome do banco de dados
define('USER', 'postgres');   // Usuário do PostgreSQL
define('PASSWORD', '4356');  // Senha do PostgreSQL


$conexao = pg_connect("host=" . HOST . " port=" . PORT . " dbname=" . DBNAME . " user=" . USER . " password=" . PASSWORD);

if (!$conexao) {
    die("Erro na conexão com o banco de dados.");
}
?>

