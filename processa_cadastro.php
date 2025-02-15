<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha

    // Verifica se o usuário já existe
    $verifica = "SELECT * FROM usuarios WHERE usuario = $1 OR email = $2";
    $result = pg_query_params($conexao, $verifica, array($usuario, $email));

    if (pg_num_rows($result) > 0) {
        echo "Usuário ou e-mail já cadastrado!";
    } else {
        // Insere o novo usuário
        $query = "INSERT INTO usuarios (usuario, email, senha) VALUES ($1, $2, $3)";
        $result = pg_query_params($conexao, $query, array($usuario, $email, $senha));

        if ($result) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário.";
        }
    }
}
?>