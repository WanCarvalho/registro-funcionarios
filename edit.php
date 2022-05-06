<?php
$hostname = "localhost";
$bancodedados = "ccit";
$usuario = "root";
$senha = "nosrednaw1311";

date_default_timezone_set ("America/Fortaleza");

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $result_usuario = "SELECT * FROM dados WHERE id='$id'";
    $resultado_usuario = mysqli_query($mysqli, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>
<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Chamado</title>
    <link rel="sortcut icon" href="/image/edit.png">
    <link rel="stylesheet" href="/style/formulario.css">
    
</head>
<body>

    <form action="proc_edit.php" class="formulario" method="GET">

        <input type="hidden" name="id" value="<?php echo $row_usuario['id'];?>">
        <!--A data será enviada automaticamente com base na hora atual da máquina-->

        <h2>Editar Chamado de ID: <?php echo $row_usuario['id']?></h2>

        <div class="campo_dados">
            <tr>
                <td>
                    <label for="inputName">Solicitado por:</label>
                    <input name="solicitante" id="solicitante" type="text" placeholder="Digite um Nome" value="<?php  echo $row_usuario['solicitante']?>"required>
                </td>
                <td>
                    <label for="inputName">Atendido por:</label>
                    <input name="atendente" id="atendente" type="text" placeholder="Digite um Nome" value="<?php  echo $row_usuario['atendente']?>" required>
                </td>
            </tr>
        </div>

        <div id="form-edit">

            <p style="margin: 0;">Solução:</p>
            <textarea name="solucao" placeholder="Defina a solução" style="resize: none; text-align: center; margin-bottom: 0.5rem;" cols="40" rows="5"><?php echo $row_usuario['solucao']?></textarea><br>
    
            <div style="margin-bottom: 0.5rem;">
                <select name="situacao" id="selecao">
                    <option value="<?php  echo $row_usuario['situacao']?>"><?php  echo $row_usuario['situacao']?></option>
                    <option value="Não iniciado">Não iniciado</option>
                    <option value="Iniciado">Iniciado</option>
                    <option value="Em andamento">Em andamento</option>
                    <option value="Finalizado">Finalizado</option>
                </select>
            </div>

            <input type="submit" value="Atualizar" class="btn">
        </div>
    </form>
</body>
</html>