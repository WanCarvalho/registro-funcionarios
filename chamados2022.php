<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamados Setembro - CCIT</title>
    <link rel="sortcut icon" href="/image/[GRANDE] ÍCONE VAZADO.png" type="image/x-icon" />
    <link rel="stylesheet" href="/style/chamados.css">
    <script src="/scripts/chamados.js"></script> 
</head>
<body>

    <!--Cabeçalho da Página-->
    <hr>
    <header id="header_page">
            <a  href="index.html" alt="TVin"><img id="logo_tvin" src="/image/Logo TVin.PNG" alt="" title="Página Inicial"></a>
            <img src="image/CCIT Central de Chamados Internos TVin.png" alt="">
            <a href="formulario.php"><img id="img_more" src="/image/More.png" alt="" title="Adicionar Chamado"></a>
    </header>
    <hr>

    <!--Contagem de Chamados-->
    <!--<div id="qtd_calls_container">

        <div class="qtd_calls">
            <h2>Chamados Totais</h2>
            <h2 id="number_qtd" style="background-color: lawngreen;">28</h2>
        </div>
        <div class="qtd_calls">
            <h2>Rubens</h2>
            <h2 id="number_qtd">0</h2>
        </div>
        <div class="qtd_calls">
            <h2>Fernandes</h2>
            <h2 id="number_qtd">0</h2>
        </div>
        <div class="qtd_calls">
            <h2>Wanderson</h2>
            <h2 id="number_qtd">23</h2>
        </div>
        <div class="qtd_calls">
            <h2>Yago</h2>
            <h2 id="number_qtd">5</h2>
        </div>
        
    </div>-->
    

    <!--Título de chamados mensais-->
    <div id="mes_chamado">
        <h1>Chamados 2022</h1>
    </div>   
    
    <!--Sessão de Chamados-->
    <div id="container_chamados">
        <?php
        include('conexao.php'); 

        $result_usuarios = "SELECT * FROM dados";
        $resultado_usuarios = mysqli_query($mysqli, $result_usuarios);

        //Condição While que pega os dados do db e imprime na tela
        while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){

            //Condição para imprimir a solução na tela apenas se houver valor atribuído a ela no banco
            if($row_usuario['solucao'] != null){

                echo "<table id='tabela_chamados' style='margin-top: 0;'>";
                echo "<tfoot>";
                    echo "<tr><td style='background-color: #6CC551; color: white; text-align: center;'><b>Solução:</b></td></tr>";
                    echo "<tr>";
                        echo "<td><p style='text-align: center;'>" . $row_usuario['solucao'] . "</p></td>";
                    echo "</tr>";
                echo "</tfoot>";
                echo "</table>";

                echo "||";

            }

            if($row_usuario['problema'] != null){

                echo "<table id='tabela_chamados' style='margin-top: 0;'>";
                echo "<tfoot>";
                    echo "<tr><td style='background-color: gray; color: white; text-align: center;'><b>Problema:</b></td></tr>";
                    echo "<tr>";
                        echo "<td><p style='text-align: center;'>" . $row_usuario['problema'] . "</p></td>";
                    echo "</tr>";
                echo "</tfoot>";
                echo "</table>";

            }
            
            echo "<table id='tabela_chamados'>";
                echo "<tbody>";
                    echo "<tr>";
                        echo "<td><strong>N° " . $row_usuario['id'] . "</strong></td>"; 

                        if($row_usuario['situacao'] == 'Não iniciado'){

                            echo "<td style='background-color: yellow; color: black; text-align: center;'><b>Status: " . $row_usuario['situacao'] . "</b></td>";
                            
                        }
    
                        if($row_usuario['situacao'] == 'Iniciado'){

                            echo "<td style='background-color: orange; color: black; text-align: center;'><b>Status: " . $row_usuario['situacao'] . "</b></td>";    
    
                        }
    
                        if($row_usuario['situacao'] == 'Em andamento'){

                            echo "<td style='background-color: blue; color: white; text-align: center;'><b>Status: " . $row_usuario['situacao'] . "</b></td>";   
    
                        }
    
                        if($row_usuario['situacao'] == 'Finalizado'){

                            echo "<td style='background-color: green; color: white; text-align: center;'><b>Status: " . $row_usuario['situacao'] . "</b></td>";
                            
                        }
                    echo "</tr>";

                    

                    echo "<tr>";
                        echo "<td><b>Solicitado por:</b></td>";
                        echo "<td>" . $row_usuario['solicitante'] . "</td>";
                        echo "<td><b>Atendido por:</b></td>";
                        echo "<td>" . $row_usuario['atendente'] . "</td>";
                        echo "<td style='max-width: 0.688rem;'>";
                            echo "<a href='edit.php?id=" . $row_usuario['id'] . "'><img title='Editar' style='width: 60%;' src='/image/edit.png'></img></a>";  
                        echo "</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td><b>Data Início:</b></td>";
                        echo "<td>" . $row_usuario['dt_inicio'] . "</td>";
                        echo "<td><b>Data Atualização:</b></td>";
                        echo "<td>" . $row_usuario['dt_fim'] . "</td>";

                        
                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";
        }
        ?>
    </div>

</body>
</html>