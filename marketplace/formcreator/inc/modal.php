<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 999999999; /* Sit on top */
  padding-top: 220px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 50%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #0176b6;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #0176b6;
  color: white;
}
#ende {
  width:90%;
  margin-top:10px;
}
#enviaFRM {
  float:left;
  border: 1px solid black;
}
#enviaFRM:hover{
  background:#0176b6 !important;
  color:white;
}
#estado{
  float:left;
  margin-left:18px;
}
#tipoEntrega{ 
  float:left;
  margin-left:15px;
}
#UFbox{
  float:left;
  margin-left:15px;
}
#cep{
  float:left;
  margin-left:15px
}
#cep input {
  width:100px;
}

#endereco{
  margin-left:10px;
}
</style>
</head>
<body>

<!-- The Modal -->
<div id="myModal" class="modal" data-backdrop="static" data-keyboard="false">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h3>Informe o tipo de envio</h3>
    </div>
    <div class="modal-body"><br><br>
      <b><h2 style="color:red;">Confirme o endereço de destino e a forma de entrega! </h2></b><br>
      
      <div id="tipoEntrega">
        <span>Tipo de entrega: </span>
        <select name="entrega" required>
          <option value=''>Selecione</option>
          <option value="Correios">Correios</option>
          <option value="Matriz">Matriz</option>
          <option value="Matriz">B2W</option>
          <option value="Matriz">Via Varejo</option>
        </select><br>
      </div>
      
      <br><br>
      <?php 
      $sqlcon = mysqli_connect('localhost', 'root', '', 'base_104', '3306'); // ALTERAR AO SUBIR PARA PROD
      $GLOBALS['sqlcon'] = $sqlcon;

      $buscaIDRequerente = "SELECT requester_id as REQUERENTE FROM glpi_plugin_formcreator_formanswers WHERE id = '{$ID}'";
      $retornaIDRequerente = mysqli_query($sqlcon, $buscaIDRequerente);
      if($retornaIDRequerente){
          while($req = mysqli_fetch_row($retornaIDRequerente)){
            $idRequerente = $req['0'];
          }
      }
      $buscaEnd = "SELECT glpi_locations.id, address, postcode, state FROM glpi_users LEFT JOIN glpi_locations on glpi_locations.id = glpi_users.locations_id WHERE glpi_users.id = {$idRequerente}";
      $retornaEnd = mysqli_query($sqlcon, $buscaEnd);
      
      if($retornaEnd){
        $d = mysqli_fetch_array($retornaEnd);
        $id = $d['id'];
        $endereco = $d['address'];
        $cep = $d['postcode'];
        $estado = $d['state'];
      }
      ?>
      <div id="endereco">
        <span for="ende">Endereço:</span>
        <input id="ende" required type="text" name="endereco" value="<?php echo $endereco; ?>"/><br><br>
      </div>
      <div id="estado">
        <span for="endereco">Cidade:</span>
        <input id="" required type="text" name="estado" value="<?php echo $estado; ?>"/><br><br>
      </div>
      <div id="UFbox">
        <span for="UF">UF:</span>
        <select id="UF" name="uf" required>
            <option value="">Selecione</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
        </select>
      </div>
      <div id="cep">
        <span for="cep">CEP:</span>
        <input id=""  type="text" name="cep" value="<?php echo $cep; ?>" required><br><br>
      </div>
      <br><br><br>
      <?php
        echo '<div class="center">';
         echo Html::submit(
            'Aprovar Pedido', [
               'name'      => 'accept_formanswer',
            ]);
         echo '</div>';
      ?>
    </div>
    <br>
    <div class="modal-footer">
       <br>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}


</script>
</body>
</html>
