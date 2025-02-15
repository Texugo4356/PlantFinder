<?php include "conexao_plantas.php"; ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Plantas</title>
</head>
<body>
    <h2>Cadastro de Plantas</h2>
    <form action="enviar.php" method="POST" enctype="multipart/form-data">
        Nome: <input type="text" name="nome" required><br>
        Descrição: <textarea name="descricao" required></textarea><br>

        Luz Solar: 
        <select name="luz_solar">
            <option value="Pouca">Pouca</option>
            <option value="Moderada">Moderada</option>
            <option value="Muita">Muita</option>
        </select><br>

        Água:
        <select name="agua">
            <option value="Pouca">Pouca</option>
            <option value="Moderada">Moderada</option>
            <option value="Muita">Muita</option>
        </select><br>

        Medicianal:
        <select name="med">
          <option value="sim">Sim</option>
          <option value="não">Não</option>
        </select><br>

        Consumivel:
        <select name="cons">
            <option value="sim">Sim</option>
            <option value="não">Não</option>
        </select><br>

        Imagem: <input type="file" name="imagem" accept="image/*" required><br>
        <button type="submit">Salvar</button>
    </form>

    <button onclick = "window.location.href='listar.php';">Login</button>
</body>
</html>
