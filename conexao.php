<?php
$hostname = "localhost";
$bancodedados = "ccit";
$usuario = "root";
$senha = "nosrednaw1311";

date_default_timezone_set ("America/Fortaleza");

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli -> connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}/*else{
    echo "<h1>Conexão bem sucedida em $bancodedados.</h1>";
}*/
/*
$sql = 'INSERT INTO dados (solicitante, atendente, problema, situacao) VALUES 
($_GET['solicitante'], $_GET['atendente'], $_GET['problema'], $_GET['situacao'])';*/

if ((isset($_POST['solicitante']))){
 
    //Abaixo variáveis que vão extrair dados do formulario
    $solicitante = $_POST['solicitante']; 
    $atendente = $_POST['atendente'];
    $str_problema = $_POST['problema'];
	$problema = strtoupper($str_problema);
    $situacao = $_POST['situacao'];
    $date = date("Y-m-d");
    $time = date("H:i:s");
    $datetime = $date."T".$time;


    //Pegar dados do formulário e inserir no banco
    $string_sql = "INSERT INTO dados (solicitante, atendente, problema, dt_inicio, dt_fim, situacao, solucao) VALUES ('$solicitante','$atendente','$problema', '$datetime', null, '$situacao', null)";
    $insert_member_res = mysqli_query($mysqli, $string_sql);
    if(mysqli_affected_rows($mysqli)>0){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<h1 style='color: green;'>Chamado Editado</h1>";
        echo '<a href="/chamados2022.php" style="text-align: center;">Voltar para página de chamados.</a>';    //Apenas um link para retornar para o formulário de cadastro
    } else {
        echo "<h1 style='color: red;'>Chamado não Editado</h1>";
    echo '<a href="/chamados2022.php" style="text-align: center;">Voltar para página de chamados.</a>';
    }
    mysqli_close($mysqli); //fecha conexão com banco de dados
 }/*else{
     echo "Por favor, preencha os dados";
 }*/

?>