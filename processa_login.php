<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Consulta o usuário no banco
    $query = "SELECT * FROM usuarios WHERE usuario = $1";
    $result = pg_query_params($conexao, $query, array($usuario));

    if ($result && pg_num_rows($result) > 0) {
        $usuarioDB = pg_fetch_assoc($result);

        // Verifica a senha
        if (password_verify($senha, $usuarioDB['senha'])) {
            $_SESSION['usuario'] = $usuarioDB['usuario']; // Salva na sessão
            header("Location: home.php"); // Redireciona para a home
            exit();
        } else {
            echo "Usuário ou senha incorretos.";
        }
    } else {
        echo "Usuário não encontrado.";
    }
}
?>