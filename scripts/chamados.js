function addNewBtn(){
    var container = document.getElementById("container_chamados");
    /*numero = fazer condição para adicionar unidade numerica sempre que adicionar novo chamado*/ 
    solicitante = document.getElementById("solicitante").nodeValue;
    atendente = document.getElementById("atendente").nodeValue;
    descritivo = document.getElementById("descritivo").nodeValue;
    data = document.getElementById("data").nodeValue;
    hora = document.getElementById("hora").nodeValue;
    selecao = document.getElementById("selecao").nodeValue;

    container.insertAdjacentHTML("afterbegin", [
        '<table id="tabela_chamados">'+
                '<tbody>'+
                            '<tr>'+
                                '<td><strong>'+numero+'</strong></td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td><b>Solicitado por:</b></td>'+
                                '<td>'+solicitante+'</td>'+
                                '<td><b>Atendido por:</b></td>'+
                                '<td>'+atendente+'</td>'+
                                '<td><b>Problema relatado:</b></td>'+
                                '<td>'+descritivo+'</td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td><b>Data Início:</b></td>'+
                                '<td>'+data+hora+'</td>'+
                                '<td><b>Data Término:</b></td>'+
                                '<td>##/##/####</td>'+
                                '<td><b>Situação:</b></td>'+
                                '<td style="background-color: chartreuse; color: red;" >Atendido</td>'+
                            '</tr>'+
                '</tbody>'+
            '</table>'
    ]);
}/*Função utilizado para adicionar tabela predefinida ao HTML*/

function newPop() {
    newpopupWindow = window.open ('/formulario.php', 'formulario.php', "width=500 height=500");
}/*Função para abrir popup do formulario*/