<?php
include "conexao_plantas.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $luz_solar = $_POST["luz_solar"];
    $agua = $_POST["agua"];
    $medicinal = $_POST["med"];
    $consumivel = $_POST["cons"];

    $imagem = $_FILES["imagem"];
    $caminhoImagem = "uploads/" . basename($imagem["name"]);

    if (move_uploaded_file($imagem["tmp_name"], $caminhoImagem)) {

        $sql = "INSERT INTO plantas (nome, descricao, imagem, luz_solar, agua, medicinal, consumivel) VALUES ($1, $2, $3, $4, $5, $6, $7)";
        $result = pg_query_params($conexao, $sql, [$nome, $descricao, $caminhoImagem, $luz_solar, $agua, $medicinal, $consumivel]);

        if ($result) {
            echo "Planta cadastrada com sucesso! <a href='listar.php'>Ver lista</a>";
        } else {
            echo "Erro ao salvar no banco.";
        }
    } else {
        echo "Erro ao enviar a imagem.";
    }
}
?>