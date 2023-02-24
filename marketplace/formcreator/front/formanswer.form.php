<?php
/**
 * ---------------------------------------------------------------------
 * Formcreator is a plugin which allows creation of custom forms of
 * easy access.
 * ---------------------------------------------------------------------
 * LICENSE
 *
 * This file is part of Formcreator.
 *
 * Formcreator is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Formcreator is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Formcreator. If not, see <http://www.gnu.org/licenses/>.
 * ---------------------------------------------------------------------
 * @copyright Copyright © 2011 - 2021 Teclib'
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @link      https://github.com/pluginsGLPI/formcreator/
 * @link      https://pluginsglpi.github.io/formcreator/
 * @link      http://plugins.glpi-project.org/#/plugin/formcreator
 * ---------------------------------------------------------------------
 */

include ("../../../inc/includes.php");

Session::redirectIfNotLoggedIn();

// Check if plugin is activated...
if (!(new Plugin())->isActivated('formcreator')) {
   Html::displayNotFoundError();
}



$formanswer = PluginFormcreatorCommon::getFormAnswer();

if (isset($_POST['update'])) {
   // Edit an existing target ticket
   $formanswer->update($_POST);
   Html::back();

} else if (isset($_POST['refuse_formanswer'])) {
   $formanswer->update($_POST);
   $formanswer->redirectToList();

} else if (isset($_POST['accept_formanswer'])) {
   if(isset($_POST['formID'])){
      $formID = $_POST['formID'];
      $validatorID = $_POST['validatorID'];
   
      $sqlcon = mysqli_connect('localhost', 'root', '', 'base_104', '3306'); // ALTERAR AO SUBIR PARA PROD
      $GLOBALS['sqlcon'] = $sqlcon;
      
      //Busca as perguntas e respostas do formulario
      $sql = "SELECT RESPOSTA.id as id, IF(name = 'Tamanho', 'BOTA DE SEGURANÇA', PERGUNTAS.name) AS CONSUMIVEL, RESPOSTA.answer as RESPOSTA FROM glpi_plugin_formcreator_answers RESPOSTA LEFT JOIN  glpi_plugin_formcreator_questions PERGUNTAS on PERGUNTAS.id = RESPOSTA.plugin_formcreator_questions_id WHERE plugin_formcreator_formanswers_id = {$formID} and RESPOSTA.answer IS NOT NULL AND RESPOSTA.answer <> '' AND PERGUNTAS.fieldtype <> 'checkboxes' AND PERGUNTAS.name != 'Tipo de Vestimenta'";
      $solicitacaoRetorno = mysqli_query($sqlcon, $sql);
   
      $arrPedidos = [];
      $ids = [];
      //Busca o id do requerente
      $buscaIDRequerente = "SELECT requester_id as REQUERENTE FROM glpi_plugin_formcreator_formanswers WHERE id = '{$formID}'";
      $retornaIDRequerente = mysqli_query($sqlcon, $buscaIDRequerente);
      if($retornaIDRequerente){
         while($req = mysqli_fetch_row($retornaIDRequerente)){
            $idRequerente = $req['0'];
         }
      }
      //Percorre o array do retorno sql das perguntas e respostas
      if($solicitacaoRetorno){
         while($row = mysqli_fetch_array($solicitacaoRetorno)){
            $quantidade = $row['RESPOSTA'];
   
            if($quantidade != 'TRIAGEM'){
   
               $consumivel = $row['CONSUMIVEL'];
   
               if($consumivel == "BOTA DE SEGURANÇA"){
                  $buscaIDInsumo = "SELECT id, consumableitemtypes_id FROM glpi_consumableitems WHERE glpi_consumableitems.name != 'Informe qual projeto você participa' and glpi_consumableitems.name = '{$consumivel} {$quantidade}'";
                  $retornaIDInsumo = mysqli_query($sqlcon, $buscaIDInsumo);
                  $numR = mysqli_num_rows($retornaIDInsumo);
                  if($numR > 0 && !empty($consumivel)){
                     if($retornaIDInsumo){
                        while($r = mysqli_fetch_array($retornaIDInsumo)){
                           $idInsumo = $r['id'];
                           $idTipo = $r['consumableitemtypes_id'];
                        }
                     }
                     $data = date("Y-m-d H:i:s");
                     $sqlINSERT = "INSERT INTO glpi_plugin_consumables_requests(consumables_id, consumableitemtypes_id, requesters_id, give_itemtype, give_items_id, status, number, date_mod) VALUES ('{$idInsumo}', '{$idTipo}', '{$validatorID}', 'User', '{$idRequerente}', '2', '1', '{$data}')";
                     if($insert = mysqli_query($sqlcon, $sqlINSERT)){
                        echo '<script>"Inserido no banco" . $row["CONSUMIVEL"])</script>';
                     } else{
                        echo'<script>alert("ERRO: " . $sqlINSERT . "<br>" . mysqli_error($sqlcon))</script>';
                     }
                     $endereco = $_POST['endereco'];
                     $cep = $_POST['cep'];
                     $estado = $_POST['estado'];
                     
                     $insertEndereco = "UPDATE glpi_plugin_formcreator_formanswers SET endereco = '{$endereco}', cep = '{$cep}', estado = '{$estado}' WHERE glpi_plugin_formcreator_formanswers.id = '{$formID}'";
                    
                  }
                  else{
                     echo "<script>alert('Erro ao efetuar pedido " . $consumivel . ", favor contatar o suporte!'); history.go(-1);</script>";
                     exit;
                  }
               } else{
                  
                  $buscaIDInsumo = "SELECT id, consumableitemtypes_id FROM glpi_consumableitems WHERE glpi_consumableitems.name != 'Informe qual projeto você participa' and glpi_consumableitems.name = '{$consumivel}'";
                  $retornaIDInsumo = mysqli_query($sqlcon, $buscaIDInsumo);
                  $numR= mysqli_num_rows($retornaIDInsumo);
   
                  if($numR > 0 && !empty($consumivel)){
                     if($retornaIDInsumo){
                        while($r = mysqli_fetch_array($retornaIDInsumo)){
                           $idInsumo = $r['id'];
                           $idTipo = $r['consumableitemtypes_id'];
                        }
                     }
                     $data = date("Y-m-d H:i:s");
                     
                     $sqlINSERT = "INSERT INTO glpi_plugin_consumables_requests(consumables_id, consumableitemtypes_id, requesters_id, give_itemtype, give_items_id, status, number, date_mod) VALUES ('{$idInsumo}', '{$idTipo}', '{$validatorID}', 'User', '{$idRequerente}', '2', '{$quantidade}', '{$data}')";
                     if($insert = mysqli_query($sqlcon, $sqlINSERT)){
                        echo '<script>"Inserido no banco" . $row["CONSUMIVEL"])</script>';
                     } else{
                        echo'<script>alert("ERRO: " . $sqlINSERT . "<br>" . mysqli_error($sqlcon))</script>';
                     }
                     $endereco = $_POST['endereco'];
                     $cep = $_POST['cep'];
                     $estado = $_POST['estado'];
                     
                     $insertEndereco = "UPDATE glpi_plugin_formcreator_formanswers SET endereco = '{$endereco}', cep = '{$cep}', estado = '{$estado}' WHERE glpi_plugin_formcreator_formanswers.id = '{$formID}'";
                     
                  }
                  else {
                     echo "<script>alert('Erro ao efetuar pedido " . $consumivel . " , favor contatar o suporte!'); history.go(-1);;</script>";
                     exit;
                  }
                  
               }
              
               // if($insert = mysqli_query($sqlcon, $sqlINSERT)){
               //    print_r("Inserido no banco" . $row['CONSUMIVEL']);
               // } else{
               //    print_r("ERRO: " . $sqlINSERT . "<br>" . mysqli_error($sqlcon));
               // }
   
            }
         }
         $formanswer->update($_POST);
         $formanswer->redirectToList();
      }
     
   
      
   }
   

} else if (isset($_POST['save_formanswer'])) {
   if (!$formanswer->update($_POST)) {
      Html::back();
   }
   if (plugin_formcreator_replaceHelpdesk()) {
      $issue = new PluginFormcreatorIssue();
      $issue->redirectToList();
   } else {
      $formanswer->redirectToList();
   }

}
//Show target ticket form
$formanswer->getFromDB((int)$_GET['id']);
if (!$formanswer->checkEntity()) {
   Html::displayRightError();
}

if (Session::getCurrentInterface() == 'helpdesk') {
   Html::helpHeader(__('Service catalog', 'formcreator'));
} else {
   Html::header(
      __('Form Creator', 'formcreator'),
      '',
      'admin',
      'PluginFormcreatorForm'
   );
}


$formanswer->display($_REQUEST);

if (Session::getCurrentInterface() == 'helpdesk') {
   Html::helpFooter();
} else {
   Html::footer();
}
