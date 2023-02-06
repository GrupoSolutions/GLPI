<?php

//AUTOLOAD COMPOSER
require  './vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$sqlcon = mysqli_connect('localhost', 'root', '', 'base_104', '3306'); // ALTERAR AO SUBIR PARA PROD
$GLOBALS['sqlcon'] = $sqlcon;

#print_r($idsSolicitacoes);
function buscaSolicitacaoAprovada(){

$sqlcon = $GLOBALS['sqlcon'];
$arrSolicitacao = [];
$idsSolicitacoes = [];

//BUSCA OS ID's DAS SOLICITAÇÕES, JUNTAMENTE COM COMENTARIO E NOME DO SOLICITANTE
$sqlSolicitacao = "SELECT glpi_plugin_formcreator_formanswers.id AS ID, USUARIOS.name as SOLICITANTE, DATE_FORMAT(request_date,'%d/%m/%Y %H:%i') AS DATA_PEDIDO, glpi_plugin_formcreator_formanswers.comment as COMENTARIO FROM glpi_plugin_formcreator_formanswers LEFT JOIN glpi_users USUARIOS on USUARIOS.id = glpi_plugin_formcreator_formanswers.requester_id WHERE STATUS = 1";
$solicitacaoRetorno = mysqli_query($sqlcon, $sqlSolicitacao);

if($solicitacaoRetorno){
    while($row = mysqli_fetch_assoc($solicitacaoRetorno)){
        array_push($arrSolicitacao, $row);
    }
}

//BUSCA O CONTEUDO DA SOLICITAÇÃO
$qtdSolicitacao = count($arrSolicitacao);
for($i = 1; $i < $qtdSolicitacao; $i++){
    $sqlPedido = "SELECT RESPOSTA.id as id, if(PERGUNTAS.name='Informe qual projeto você participa', ' ', PERGUNTAS.name) AS PERGUNTA, RESPOSTA.answer as RESPOSTA FROM glpi_plugin_formcreator_answers RESPOSTA LEFT JOIN  glpi_plugin_formcreator_questions PERGUNTAS on PERGUNTAS.id = RESPOSTA.plugin_formcreator_questions_id WHERE plugin_formcreator_formanswers_id = {$arrSolicitacao[$i]['ID']} and resposta.answer IS NOT NULL AND resposta.answer <> '' AND PERGUNTAS.fieldtype <> 'checkboxes'";
    $returnPedido = mysqli_query($sqlcon, $sqlPedido);

    if($returnPedido){
        while($row = mysqli_fetch_array($returnPedido)){
            array_push($arrSolicitacao[$i], "{$row['PERGUNTA']} : {$row['RESPOSTA']}");
            // array_push($arrSolicitacao[$i], $row['RESPOSTA']);

        }
    }
}

    for ($j = 1; $j < $qtdSolicitacao; $j++){
        $oldV = $arrSolicitacao[$j][0];
        $newV = str_replace('  : ', '', $oldV);
        $arrSolicitacao[$j][0] = $newV;
        
    }

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'Relatório de Solicitações Aprovadas');
    $sheet->setCellValue('A2', 'ID da Solicitação');
    $sheet->setCellValue('B2', 'Solicitante');
    $sheet->setCellValue('C2', 'Data da Solicitação');
    $sheet->setCellValue('D2', 'Comentário');
    $sheet->setCellValue('E2', 'Projeto');
    $sheet->setCellValue('F2', 'Solicitação');

    $sheet->fromArray($arrSolicitacao, null, 'A3');

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="RelatorioDeSolicitacaoAprovada.xlsx"');
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
    
}

buscaSolicitacaoAprovada();

?>