<?php

/**
 * -------------------------------------------------------------------------
 * UsedItemsExport plugin for GLPI
 * -------------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of UsedItemsExport.
 *
 * UsedItemsExport is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * UsedItemsExport is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with UsedItemsExport. If not, see <http://www.gnu.org/licenses/>.
 * -------------------------------------------------------------------------
 * @author    François Legastelois
 * @copyright Copyright (C) 2016-2022 by UsedItemsExport plugin team.
 * @license   AGPLv3 https://www.gnu.org/licenses/agpl-3.0.html
 * @link      https://github.com/pluginsGLPI/useditemsexport
 * -------------------------------------------------------------------------
 */

if (!defined('GLPI_ROOT')) {
   die("Sorry. You can't access directly to this file");
}

class PluginUseditemsexportExport extends CommonDBTM {

   public function Mask($mask,$str){
      $str = str_replace(" ","",$str);
      for($i=0;$i<strlen($str);$i++){
         $mask[strpos($mask,"#")] = $str[$i];
      }
      return $mask;
   }

   public static $rightname = 'plugin_useditemsexport_export';

   static function getTypeName($nb = 0) {

      return __('Termos', 'useditemsexport');
   }

   /**
    * @see CommonGLPI::getTabNameForItem()
   **/
   function getTabNameForItem(CommonGLPI $item, $withtemplate = 0) {

      if ($item->getType()=='User') {
         if ($_SESSION['glpishow_count_on_tabs']) {
            return self::createTabEntry(self::getTypeName(), self::countForItem($item));
         }
         return self::getTypeName();
      }
      return '';
   }

   /**
    * @see CommonGLPI::displayTabContentForItem()
   **/
   static function displayTabContentForItem(CommonGLPI $item, $tabnum = 1, $withtemplate = 0) {
      global $CFG_GLPI;

      if ($item->getType()=='User') {
         if (Session::haveRightsOr('plugin_useditemsexport_export', [READ, CREATE, PURGE])) {

            $PluginUseditemsexportExport = new self();
            $PluginUseditemsexportExport->showForUser($item);

         } else {
            echo "<div align='center'><br><br><img src=\"" . $CFG_GLPI["root_doc"] .
                     "/pics/warning.png\" alt=\"warning\"><br><br>";
            echo "<b>" . __("Access denied") . "</b></div>";
         }

      }
   }

   /**
    * @param $item    CommonDBTM object
   **/
   public static function countForItem(CommonDBTM $item) {
      return countElementsInTable(getTableForItemType(__CLASS__), ['users_id' => $item->getID()]);
   }

   /**
    * Get all generated export for user.
    *
    * @param $users_id user ID
    *
    * @return array of exports
   **/
   static function getAllForUser($users_id) {
      global $DB;

      $exports = [];

      // Get default one
      foreach ($DB->request(getTableForItemType(__CLASS__), "`users_id` = '$users_id'") as $data) {
         $exports[$data['id']] = $data;
      }

      return $exports;
   }

   /**
    * @param CommonDBTM $item
    * @param array $options
    * @return nothing
    */
   function showForUser($item, $options = []) {
      global $DB, $CFG_GLPI;

      $users_id = $item->getField('id');

      $exports = self::getAllForUser($users_id);

      $canpurge = self::canPurge();
      $cancreate = self::canCreate();

      if ($cancreate) {
         $rand = mt_rand();

         echo "<form method='post' name='useditemsexport_form$rand' id='useditemsexport_form$rand'
                  action=\"" . Plugin::getWebDir('useditemsexport') . "/front/export.form.php\">";

                  echo "<table class='tab_cadre_fixehov'>";
                  echo "<tr class='tab_bg_2' style='margin-left:25px;'><td colspan='2'>".__('Gerar termo de responsabilidade', 'useditemsexport');
                     echo "&nbsp;&nbsp<input type='submit' name='generate' value=\"".__('Create')."\" class='submit'>";
                     echo "<input type='hidden' name='users_id' value='$users_id'>";
                  echo "</td>";
                echo "<td colspan='2'>".__('Gerar termo de devolução', 'useditemsexport');
                     echo "&nbsp;&nbsp<input type='submit' name='generateDev' value=\"".__('Create')."\" class='submit'>";
                     echo "<input type='hidden' name='users_id' value='$users_id'>";
                  echo "</td></tr>";
               echo "</table>";

         Html::closeForm();
      }

      if ($canpurge && count($exports) > 0) {
         $rand = mt_rand();
         Html::openMassiveActionsForm('mass' . __CLASS__ . $rand);
         $massiveactionparams = ['item' => $item, 'container' => 'mass'.__CLASS__.$rand];
         Html::showMassiveActions($massiveactionparams);
      }

      echo "<table class='tab_cadre_fixehov'>";
      echo "<tr><th colspan='" . ($canpurge ? 5 : 4) . "'>"
                     . __('Ultimos termos gerados', 'useditemsexport') . "</th></tr><tr>";

      if (count($exports) == 0) {

         echo "<tr class='tab_bg_1'>";
            echo "<td class='center' colspan='" . ($canpurge ? 5 : 4) . "'>"
                     .__('Sem termos gerados para este usuário')."</td>";
         echo "</tr>";

      } else {

         if ($canpurge) {
            echo "<th width='10'>" . Html::getCheckAllAsCheckbox('mass' . __CLASS__ . $rand) . "</th>";
         }
         echo "<th>" . __('Tipo de Termo', 'useditemsexport') . "</th>";
         echo "<th>" . __('Data de criação', 'useditemsexport') . "</th>";
         echo "<th>" . __('Autor', 'useditemsexport') . "</th>";
         echo "<th>" . __('Documento', 'useditemsexport') . "</th>";
         echo "</tr>";

         foreach ($exports as $data) {
            echo "<tr class='tab_bg_1'>";

            if ($canpurge) {
               echo "<td width='10'>";
               Html::showMassiveActionCheckBox(__CLASS__, $data["id"]);
               echo "</td>";
            }

               echo "<td class='center'>";
               echo $data["refnumber"];
               echo "</td>";

               echo "<td class='center'>";
               echo Html::convDateTime($data["date_mod"]);
               echo "</td>";

               $User = new User();
               $User->getFromDB($data['authors_id']);
               echo "<td class='center'>";
               echo $User->getLink();
               echo "</td>";

               $Doc = new Document();
               $Doc->getFromDB($data['documents_id']);
               echo "<td class='center'>";
               echo $Doc->getDownloadLink();
               echo "</td>";
            echo "</tr>";
         }

      }

      echo "</table>";
      if ($canpurge && count($exports) > 0) {
         $massiveactionparams['ontop'] = false;
         Html::showMassiveActions($massiveactionparams);
         Html::closeForm();

      }

   }

   
   static function getModelo($tipo, $itemdatas){
   
      $manu_id = $itemdatas['manufacturers_id'];

      if($tipo == "Computador"){
         $typetb = "glpi_computertypes";
         $modeltb = "glpi_computermodels";
         $tipo_id = $itemdatas['computertypes_id'];
         $model_id = $itemdatas['computermodels_id'];
      }
      else if($tipo == "Monitor"){
      }
      else if($tipo == "Dispositivo de rede"){
      }
      else if($tipo == "Impressora"){
      }
      else if($tipo == "Telefone"){
      }
      else if($tipo == "Dispositivo"){
      } 
      else{
      }

      $iterator_tipo = $DB->request(['SELECT'=> 'name', 'FROM'=> $typetb, 'WHERE'=> ['id' => $tipo_id]]);
      $iterator_modelo = $DB->request(['SELECT' => 'name', 'FROM' => $modeltb, 'WHERE'=> ['id' => $model_id]]);
      $iterator_manufact = $DB->request(['SELECT' => 'name', 'FROM' => 'glpi_manufacturers', 'WHERE'=> ['id' => $manu_id]]);

      foreach ($iterator_tipo as $datatipo) {
         $tipomod = $datatipo['name'];
      }
      foreach($iterator_modelo as $datamodelo) {
         $modelo = $datamodelo['name'];
      }
      foreach($iterator_manufact as $datafab){
         $fabricante = $datafab['name'];
      }
      print_r($tipomod . " " . $fabricante . " " . $modelo);
   }

 

   /**
    * Generate PDF for user and add entry into DB
    *
    * @param $users_id user ID
    *
    * @return array of exports
   **/
   static function generatePDF($users_id) {

      $num       = self::getNextNum();
      $refnumber = self::getNextRefnumber();
      

      if (isset($_SESSION['plugins']['useditemsexport']['config'])) {
         $useditemsexport_config = $_SESSION['plugins']['useditemsexport']['config'];
      }

      // Compile address from current_entity
      $entity = new Entity();
      $entity->getFromDB($_SESSION['glpiactive_entity']);
      $entity_address = '<h3>' . $entity->fields["name"] . '</h3><br />';
      $entity_address.= $entity->fields["address"] . '<br />';
      $entity_address.= $entity->fields["postcode"] . ' - ' . $entity->fields['town'] . '<br />';
      $entity_address.= $entity->fields["country"].'<br />';

      if (isset($entity->fields["email"])) {
         $entity_address.= __('Email') . ' : ' . $entity->fields["email"] . '<br />';
      }

      if (isset($entity->fields["phonenumber"])) {
         $entity_address.= __('Phone') . ' : ' . $entity->fields["phonenumber"] . '<br />';
      }

      // Get User information
      $User = new User();
      $User->getFromDB($users_id);

      // Get Author information
      $Author = new User();
      $Author->getFromDB(Session::getLoginUserID());

      // Logo
      $logo = GLPI_PLUGIN_DOC_DIR.'././logo.png';

      ob_start();
      ?>
      
      <?php
            global $DB;

            $allUsedItemsForUser = self::getAllUsedItemsForUser($users_id);

            $iterator = $DB->request([
               'SELECT'          => 'rgfield',
               'FROM'            => 'glpi_plugin_fields_userrgs',
               'WHERE'           => ['items_id' => $users_id]
           ]);
           
           foreach ($iterator as $data) {
               $rg = $data['rgfield'];
           }
            
            require("termo.php");
         ?>
         <table>
            <tr>
              <th style="width: 50%;border: 1px solid #000000;">
                 <b> <?php echo __('Serial number'); ?> </b>
               </th>
               <th style="width: 25%;border: 1px solid #000000;">
                 <b> <?php echo __('Patrimônio'); ?> </b>
               </th>
               <th style="width: 25%;border: 1px solid #000000;">
                 <b> <?php echo __('Descricão:'); ?> </b>
               </th>
            </tr>
            <?php

            $allUsedItemsForUser = self::getAllUsedItemsForUser($users_id);
            foreach ($allUsedItemsForUser as $itemtype => $used_items) {

               $item = getItemForItemtype($itemtype);
               
               foreach ($used_items as $item_datas) {
                  if(isset($item_datas['serial'])){
            ?>
            <tr>
               <td style="width: 50%;border: 1px solid #000000;">
                  <?php
                  if (isset($item_datas['serial'])) {
                     echo $item_datas['serial'];
                  } ?>
               </td>
               <td style="width: 25%;border: 1px solid #000000;">
                  <?php echo $item_datas['name']; ?>
               </td>
               <td style="width: 25%;border: 1px solid #000000;">
                  <?php 
                  $tipo = $item->getTypeName(1); 
                  $manu_id = $item_datas['manufacturers_id'];
                  if($tipo == "Computador"){
                     $typetb = "glpi_computertypes";
                     $modeltb = "glpi_computermodels";
                     $tipo_id = $item_datas['computertypes_id'];
                     $model_id = $item_datas['computermodels_id'];
                  }
                  else if($tipo == "Monitor"){
                     $typetb = "glpi_monitortypes";
                     $modeltb = "glpi_monitormodels";
                     $tipo_id = $item_datas['monitortypes_id'];
                     $model_id = $item_datas['monitormodels_id'];
                  }
                  else if($tipo == "Dispositivo de rede"){
                     $typetb = "glpi_networkequipmenttypes";
                     $modeltb = "glpi_networkequipmentmodels";
                     $tipo_id = $item_datas['networkequipmenttypes_id'];
                     $model_id = $item_datas['networkequipmentmodels_id'];
                  }
                  else if($tipo == "Impressora"){
                     $typetb = "glpi_printertypes";
                     $modeltb = "glpi_printermodels";
                     $tipo_id = $item_datas['printertypes_id'];
                     $model_id = $item_datas['printermodels_id'];
                  }
                  else if($tipo == "Telefone"){
                     $typetb = "glpi_phonetypes";
                     $modeltb = "glpi_phonemodels";
                     $tipo_id = $item_datas['phonetypes_id'];
                     $model_id = $item_datas['phonemodels_id'];
                  }
                  else if($tipo == "Dispositivo"){
                     $typetb = "glpi_peripheraltypes";
                     $modeltb = "glpi_peripheralmodels";
                     $tipo_id = $item_datas['peripheraltypes_id'];
                     $model_id = $item_datas['peripheralmodels_id'];
                  } 
                  else{
                  }
            
                  $iterator_tipo = $DB->request(['SELECT'=> 'name', 'FROM'=> $typetb, 'WHERE'=> ['id' => $tipo_id]]);
                  $iterator_modelo = $DB->request(['SELECT' => 'name', 'FROM' => $modeltb, 'WHERE'=> ['id' => $model_id]]);
                  $iterator_manufact = $DB->request(['SELECT' => 'name', 'FROM' => 'glpi_manufacturers', 'WHERE'=> ['id' => $manu_id]]);
            
                  foreach ($iterator_tipo as $datatipo) {
                     $tipomod = $datatipo['name'];
                  }
                  foreach($iterator_modelo as $datamodelo) {
                     $modelo = $datamodelo['name'];
                  }
                  foreach($iterator_manufact as $datafab){
                     $fabricante = $datafab['name'];
                  }
                  echo $tipomod . " " . $fabricante . " " . $modelo;
                   ?>
               </td>
            </tr>
                  <?php
                  }
               }}
            
            ?>
         </table>
         <p></p>
         <table style="border-collapse: collapse;">
            <tr>
               <td style="width: 50%; border-bottom: 1px solid #000000;">
                  <strong><?php echo "Grupo Solutions"; ?> :</strong>
               </td>
               <td style="width: 50%; border-bottom: 1px solid #000000">
                  <strong><?php echo $User->getFriendlyName(); ?> :</strong>
               </td>
            </tr>
            <tr>
               <td style="border: 1px solid #000000; width: 50%; vertical-align: bottom">
                  <?php echo __('Assinatura', 'useditemsexport'); ?> : <p><p></p></p>
               </td>
               <td style="border: 1px solid #000000; width: 50%; vertical-align: bottom;">
                  <?php echo __('Assinatura', 'useditemsexport'); ?> : <p><p></p></p>
               </td>
            </tr>
         </table>
         
      </page>
      <?php

      $content = ob_get_clean();

      // Generate PDF
      $pdf = new GLPIPDF([
         'orientation' => $useditemsexport_config['orientation'],
         'format'      => $useditemsexport_config['format'],
      ]);
      $pdf->WriteHTML($content);
      $contentPDF = $pdf->Output('', 'S');

      // Store PDF in GLPi upload dir and create document
      file_put_contents(GLPI_UPLOAD_DIR . '/' . $refnumber.'.pdf', $contentPDF);
      $documents_id = self::createDocument($refnumber);

      // Add log for last generated PDF
      $export = new self();

      $input = [];
      $input['users_id']     = $users_id;
      $input['date_mod']     = date("Y-m-d H:i:s");
      $input['num']          = $num;
      $input['refnumber']    = "Termo de Responsabilidade";
      $input['authors_id']   = Session::getLoginUserID();
      $input['documents_id'] = $documents_id;

      if ($export->add($input)) {
         return true;
      }

      return false;
   }

    /**
    * Generate PDF for user and add entry into DB
    *
    * @param $users_id user ID
    *
    * @return array of exports
   **/
  
  static function generateTermoDev($users_id) {

   $num       = self::getNextNum();
   $refnumber = self::getNextRefnumber();
   print_r($refnumber);

   if (isset($_SESSION['plugins']['useditemsexport']['config'])) {
      $useditemsexport_config = $_SESSION['plugins']['useditemsexport']['config'];
   }

   // Compile address from current_entity
   $entity = new Entity();
   $entity->getFromDB($_SESSION['glpiactive_entity']);
   $entity_address = '<h3>' . $entity->fields["name"] . '</h3><br />';
   $entity_address.= $entity->fields["address"] . '<br />';
   $entity_address.= $entity->fields["postcode"] . ' - ' . $entity->fields['town'] . '<br />';
   $entity_address.= $entity->fields["country"].'<br />';

   if (isset($entity->fields["email"])) {
      $entity_address.= __('Email') . ' : ' . $entity->fields["email"] . '<br />';
   }

   if (isset($entity->fields["phonenumber"])) {
      $entity_address.= __('Phone') . ' : ' . $entity->fields["phonenumber"] . '<br />';
   }

   // Get User information
   $User = new User();
   $User->getFromDB($users_id);
   $Author = new User();
   $Author->getFromDB(Session::getLoginUserID());
  
   // Logo
   $logo ="././logo.png";

   ob_start();
   ?>
   
      <?php
         global $DB;

         $allUsedItemsForUser = self::getAllUsedItemsForUser($users_id);

         $iterator = $DB->request([
            'SELECT'          => 'rgfield',
            'FROM'            => 'glpi_plugin_fields_userrgs',
            'WHERE'           => ['items_id' => $users_id]
        ]);
        foreach ($iterator as $data) {
            $rg = $data['rgfield'];
        }
         require("termodev.php");
      ?>
      <table>
         <tr>
           <th style="width: 50%;border: 1px solid #000000;">
               <b><?php echo __('Serial number'); ?></b>
            </th>
            <th style="width: 25%;border: 1px solid #000000;">
               <b><?php echo __('Patrimônio'); ?></b>
            </th>
            <th style="width: 25%;border: 1px solid #000000;">
               <b><?php echo __('Descrição'); ?></b>
            </th>
         </tr>
         <?php

         $allUsedItemsForUser = self::getAllUsedItemsForUser($users_id);
         foreach ($allUsedItemsForUser as $itemtype => $used_items) {

            $item = getItemForItemtype($itemtype);
            
            foreach ($used_items as $item_datas) {
               if(isset($item_datas['serial'])){
         ?>
         <tr>
            <td style="width: 50%;border: 1px solid #000000;">
               <?php
                  print_r($item_datas['serial']);
              ?>
            </td>
            <td style="width: 25%;border: 1px solid #000000;">
               <?php echo $item_datas['name']; ?>
            </td>
            <td style="width: 25%;border: 1px solid #000000;">
               <?php 
                  $tipo = $item->getTypeName(1); 
                  $manu_id = $item_datas['manufacturers_id'];
                  if($tipo == "Computador"){
                     $typetb = "glpi_computertypes";
                     $modeltb = "glpi_computermodels";
                     $tipo_id = $item_datas['computertypes_id'];
                     $model_id = $item_datas['computermodels_id'];
                  }
                  else if($tipo == "Monitor"){
                     $typetb = "glpi_monitortypes";
                     $modeltb = "glpi_monitormodels";
                     $tipo_id = $item_datas['monitortypes_id'];
                     $model_id = $item_datas['monitormodels_id'];
                  }
                  else if($tipo == "Dispositivo de rede"){
                     $typetb = "glpi_networkequipmenttypes";
                     $modeltb = "glpi_networkequipmentmodels";
                     $tipo_id = $item_datas['networkequipmenttypes_id'];
                     $model_id = $item_datas['networkequipmentmodels_id'];
                  }
                  else if($tipo == "Impressora"){
                     $typetb = "glpi_printertypes";
                     $modeltb = "glpi_printermodels";
                     $tipo_id = $item_datas['printertypes_id'];
                     $model_id = $item_datas['printermodels_id'];
                  }
                  else if($tipo == "Telefone"){
                     $typetb = "glpi_phonetypes";
                     $modeltb = "glpi_phonemodels";
                     $tipo_id = $item_datas['phonetypes_id'];
                     $model_id = $item_datas['phonemodels_id'];
                  }
                  else if($tipo == "Dispositivo"){
                     $typetb = "glpi_peripheraltypes";
                     $modeltb = "glpi_peripheralmodels";
                     $tipo_id = $item_datas['peripheraltypes_id'];
                     $model_id = $item_datas['peripheralmodels_id'];
                  } 
                  else{
                  }
            
                  $iterator_tipo = $DB->request(['SELECT'=> 'name', 'FROM'=> $typetb, 'WHERE'=> ['id' => $tipo_id]]);
                  $iterator_modelo = $DB->request(['SELECT' => 'name', 'FROM' => $modeltb, 'WHERE'=> ['id' => $model_id]]);
                  $iterator_manufact = $DB->request(['SELECT' => 'name', 'FROM' => 'glpi_manufacturers', 'WHERE'=> ['id' => $manu_id]]);
            
                  foreach ($iterator_tipo as $datatipo) {
                     $tipomod = $datatipo['name'];
                  }
                  foreach($iterator_modelo as $datamodelo) {
                     $modelo = $datamodelo['name'];
                  }
                  foreach($iterator_manufact as $datafab){
                     $fabricante = $datafab['name'];
                  }
                  echo $tipomod . " " . $fabricante . " " . $modelo;
               ?>
            </td>
         </tr>
               <?php
               }
            }           
         }
         ?>
      </table>
      <p></p>
      <p></p>
      <table style="border-collapse: collapse;">
         <tr>
            <td style="width: 100%; border-bottom: 1px solid #000000;">
               <strong>Observação: </strong> 
            </td>
         </tr>
         <tr>
            <td style="border: 1px solid #000000; width: 100%; vertical-align: bottom"><br><br>
            <?php 
            foreach ($allUsedItemsForUser as $itemtype => $used_items) {
   
               $item = getItemForItemtype($itemtype);
               
               foreach ($used_items as $item_datas) {
                  if(isset($item_datas['serial'])){
                     if(!empty($item_datas['comment'])){
                        echo($item_datas['name'] . ": ");
                        echo($item_datas['comment']. "<br>   ");
                     }
                  }
               }
            }
            ?>
            </td>
         </tr>
      </table>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <table style="border-collapse: collapse;">
         <tr>
            <td style="width: 50%; border-bottom: 1px solid #000000;">
               <strong><?php echo "Grupo Solutions"; ?> :</strong>
            </td>
            <td style="width: 50%; border-bottom: 1px solid #000000">
               <strong><?php echo $User->getFriendlyName(); ?> :</strong>
            </td>
         </tr>
         <tr>
            <td style="border: 1px solid #000000; width: 50%; vertical-align: bottom">
               <?php echo __('Assinatura', 'useditemsexport'); ?> : <br><br>
            </td>
            <td style="border: 1px solid #000000; width: 50%; vertical-align: bottom;">
               <?php echo __('Assinatura', 'useditemsexport'); ?> : <br><br>
            </td>
         </tr>
      </table>
      
   </page>
   <?php

   $content = ob_get_clean();

   // Generate PDF
   $pdf = new GLPIPDF([
      'orientation' => $useditemsexport_config['orientation'],
      'format'      => $useditemsexport_config['format'],
   ]);
   $pdf->WriteHTML($content);
   $contentPDF = $pdf->Output('', 'S');

   // Store PDF in GLPi upload dir and create document
   file_put_contents(GLPI_UPLOAD_DIR . '/' . $refnumber.'.pdf', $contentPDF);
   $documents_id = self::createDocument($refnumber);

   // Add log for last generated PDF
   $export = new self();

   $input = [];
   $input['users_id']     = $users_id;
   $input['date_mod']     = date("Y-m-d H:i:s");
   $input['num']          = $num;
   $input['refnumber']    = "Termo de Devolução";
   $input['authors_id']   = Session::getLoginUserID();
   $input['documents_id'] = $documents_id;

   if ($export->add($input)) {
      return true;
   }

   return false;
}


   /**
    * Store Document into GLPi DB
    * @param refnumber
    * @return integer id of Document
    */
   static function createDocument($refnumber) {

      $doc = new Document();

      $input                          = [];
      $input["entities_id"]           = $_SESSION['glpiactive_entity'];
      $input["name"]                  = __('Used-Items-Export', 'useditemsexport').'-'.$refnumber;
      $input["upload_file"]           = $refnumber.'.pdf';
      $input["documentcategories_id"] = 0;
      $input["mime"]                  = "application/pdf";
      $input["date_mod"]              = date("Y-m-d H:i:s");
      $input["users_id"]              = Session::getLoginUserID();

      $doc->check(-1, CREATE, $input);
      $newdocid=$doc->add($input);

      return $newdocid;
   }

   /**
    * Get next num
    * @param nothing
    * @return integer
    */
   static function getNextNum() {
      global $DB;

      $query = "SELECT MAX(num) as num
                  FROM " . self::getTable();

      $result = $DB->query($query);
      $nextNum = $DB->result($result, 0, 'num');
      if (!$nextNum) {
         return 1;
      } else {
         $nextNum++;
         return $nextNum;
      }

      return false;
   }

   /**
    * Compute next refnumber
    * @param nothing
    * @return string
    */
   static function getNextRefnumber() {
      global $DB;

      if ($nextNum = self::getNextNum()) {
         $nextRefnumber = str_pad($nextNum, 4, "0", STR_PAD_LEFT);
         $date = new DateTime();
         return $nextRefnumber . '-' . $date->format('Y');
      } else {
         return false;
      }
   }

   /**
    * Get all used items for user
    * @param ID of user
    * @return array
    */
   static function getAllUsedItemsForUser($ID) {
      global $DB, $CFG_GLPI;

      $items = [];

      foreach ($CFG_GLPI['linkuser_types'] as $itemtype) {
         if (!($item = getItemForItemtype($itemtype))) {
            continue;
         }
         if ($item->canView()) {
            $itemtable = getTableForItemType($itemtype);
            $query = "SELECT *
                      FROM `$itemtable`
                      WHERE `users_id` = '$ID'";

            if ($item->maybeTemplate()) {
               $query .= " AND `is_template` = '0' ";
            }
            if ($item->maybeDeleted()) {
               $query .= " AND `is_deleted` = '0' ";
            }
            $result    = $DB->query($query);

            $type_name = $item->getTypeName();

            if ($DB->numrows($result) > 0) {
               while ($data = $DB->fetchAssoc($result)) {
                  $items[$itemtype][] = $data;
               }
            }
         }
      }

      // Consumables
      $consumables = $DB->request(
         [
            'SELECT' => ['name', 'otherserial'],
            'FROM'   => ConsumableItem::getTable(),
            'WHERE'  => [
               'id' => new QuerySubQuery(
                  [
                     'SELECT' => 'consumableitems_id',
                     'FROM'   => Consumable::getTable(),
                     'WHERE'  => [
                        'itemtype' => User::class,
                        'items_id' => $ID
                     ],
                  ]
               )
            ],
         ]
      );

      foreach ($consumables as $data) {
         $items['ConsumableItem'][] = $data;
      }

      return $items;
   }

   /**
    * Clean GLPi DB on export purge
    *
    * @return nothing
    */
   function cleanDBonPurge() {

      // Clean Document GLPi
      $doc = new Document();
      $doc->getFromDB($this->fields['documents_id']);
      $doc->delete(['id' => $this->fields['documents_id']], true);
   }

   /**
    * Install all necessary tables for the plugin
    *
    * @return boolean True if success
    */
   static function install(Migration $migration) {
      global $DB;

      $default_charset = DBConnection::getDefaultCharset();
      $default_collation = DBConnection::getDefaultCollation();
      $default_key_sign = DBConnection::getDefaultPrimaryKeySignOption();

      $table = getTableForItemType(__CLASS__);

      if (!$DB->tableExists($table)) {
         $migration->displayMessage("Installing $table");

         $query = "CREATE TABLE IF NOT EXISTS `$table` (
                  `id` INT {$default_key_sign} NOT NULL AUTO_INCREMENT,
                  `users_id` INT {$default_key_sign} NOT NULL DEFAULT '0',
                  `date_mod` TIMESTAMP NULL DEFAULT NULL,
                  `num` SMALLINT NOT NULL DEFAULT 0,
                  `refnumber` VARCHAR(9) NOT NULL DEFAULT '0000-0000',
                  `authors_id` INT {$default_key_sign} NOT NULL DEFAULT '0',
                  `documents_id` INT {$default_key_sign} NOT NULL DEFAULT '0',
               PRIMARY KEY  (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET={$default_charset} COLLATE={$default_collation} ROW_FORMAT=DYNAMIC;";
            $DB->query($query) or die ($DB->error());
      }
   }

   /**
    * Uninstall previously installed tables of the plugin
    *
    * @return boolean True if success
    */
   static function uninstall() {
      global $DB;

      $table = getTableForItemType(__CLASS__);

      $query = "DROP TABLE IF EXISTS  `".$table."`";
      $DB->query($query) or die ($DB->error());
   }

}
