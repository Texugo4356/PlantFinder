<?php
// Db usuarios
define('HOST', 'localhost'); 
define('PORT', '5432');      
define('DBNAME', 'cadastro');  
define('USER', 'postgres');  
define('PASSWORD', '4356');  


$conexao = pg_connect("host=" . HOST . " port=" . PORT . " dbname=" . DBNAME . " user=" . USER . " password=" . PASSWORD);

if (!$conexao) {
    die("Erro na conexão com o banco de dados.");
}
?>

