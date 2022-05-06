<?php
$hostname = "localhost";
$bancodedados = "ccit";
$usuario = "root";
$senha = "nosrednaw1311";

date_default_timezone_set ("America/Fortaleza");

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli -> connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//-------------------------------


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$solicitante = filter_input(INPUT_GET, 'solicitante', FILTER_SANITIZE_STRING);
$atendente = filter_input(INPUT_GET, 'atendente', FILTER_SANITIZE_STRING);
$situacao = filter_input(INPUT_GET, 'situacao', FILTER_SANITIZE_STRING);
$solucao = filter_input(INPUT_GET, 'solucao', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE dados SET solicitante='$solicitante', atendente='$atendente', dt_fim=NOW(), situacao='$situacao', solucao='$solucao' WHERE id='$id'";
$resultado_usuario = mysqlI_query($mysqli, $result_usuario);

if(mysqli_affected_rows($mysqli)>0){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
    echo "<h1 style='color: green;'>Chamado Editado</h1>";
    echo '<a href="/chamados2022.php" style="text-align: center;">Voltar para página de chamados.</a>'; //Apenas um link para retornar para o formulário de cadastro
} else {
    echo "<h1 style='color: red;'>Chamado não Editado</h1>";
    echo '<a href="/chamados2022.php" style="text-align: center;">Voltar para página de chamados.</a>';
}

$close_conn = mysqli_close($mysqli);

?>