<?php

    include ('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Chamado</title>
    <link rel="sortcut icon" href="/image/Logo TVin.PNG">
    <link rel="stylesheet" href="/style/formulario.css">

</head>
<body>

    <form action="conexao.php" method="POST" name="formulario" class="formulario">

        <h2>Novo Chamado</h2>

        <div class="campo_dados">
                <tr>
                    <label for="inputName">Solicitado por:</label>
                    <input name="solicitante" id="solicitante" type="text" placeholder="Digite um Nome" required>
                </tr>
                <br>
                <br>
                <tr>
                    <label for="inputName">Atendido por:</label>
                    <input name="atendente" id="atendente" type="text" placeholder="Digite um Nome" required>
                </tr>
        </div>

        <div class="descritivo">
            <label for="">Descritivo do Problema:</label>
            <textarea name="problema" placeholder="Descreva o problema aqui" cols="50" rows="5" required></textarea>
        </div>

        <!--Criado para adicionar data e hora manualmente. Implementado para pegar
        automaticamente em conexao.php-->
        <!--<div class="campo_dados">
            <tr>
                <td>
                    <label for="">Início:</label>
                    <input name="data" type="date" required>
                    <input name="hora" type="time" required>
                </td>
            </tr> 
        </div>-->

        <div>
            <select name="situacao" id="selecao">
                <option value="">Selecione a situação</option>
                <option value="Não iniciado">Não iniciado</option>
                <option value="Iniciado">Iniciado</option>
                <option value="Em andamento">Em andamento</option>
                <option value="Finalizado">Finalizado</option>
            </select>
        </div>

        <div class="campo_dados">
            <input type="submit" value="Salvar" class="btn">
        </div>

    </form>
</body>
</html>
