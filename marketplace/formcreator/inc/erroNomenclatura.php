<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
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

button {
  padding: 1.3em 3em;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}

button:hover {
  background-color: #23c483;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);
}

button:active {
  transform: translateY(-1px);
}
.btn-82{
  margin-bottom:15px;
}
</style>
</head>
<body>
<div id="myModal" class="modal" data-backdrop="static" data-keyboard="false">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h3>Erro ao efetuar pedido!</h3>
  </div>
  <div class="modal-body" style="text-align:center;"><br><br>
    <b><h2>Erro ao efetuar pedido de <span style="color:red;"><?php echo $consumivel; ?>!</span><br> Favor contate o suporte!</h2></b><br>
    <button type="button" onclick="erro()" class="btn-82" role="button"><b>Voltar<b></a>
    <br>
 

</div>
     
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

function erro(){
    history.go(-1);
}
</script>
</body>
</html>