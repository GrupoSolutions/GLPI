<?php
	require './dompdf/autoload.inc.php';
	use Dompdf\Dompdf;
	use Dompdf\Options;
	$options = new Options();
	$options->set('defaultFont', 'Courier');
	$options->set('isRemoteEnabled', TRUE);
	$options->set('debugKeepTemp', TRUE);
	$options->set('isHtml5ParserEnabled', TRUE);
	$options->set('chroot', '/');
	$options->setIsRemoteEnabled(true);
	
	$PDF = new Dompdf($options);
	//Connect To Database

	$entity_id = $_POST["entities_id"];
	$tipo = $_POST["tipo"];
	$hostname="localhost:3306";
	$username="root";
	$password="";
	$dbname="base_104";
	$acao = $_POST["acao"];
	$conn = mysqli_connect($hostname,$username, $password) or die ("html>script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)/script>/html>");
	function get_post_action($name)
	{
		$params = func_get_args();

		foreach ($params as $name) {
			if (isset($_POST[$name])) {
				return $name;
			}
		}
	}
	mysqli_select_db($conn, "base_104");

	function getData($tipo, $entity_id){
		if($tipo == "Computador"){
			$query = "SELECT * FROM glpi_computers where id = $entity_id";
			#focar as querys nesta area, e após isto, tratar os resultados logo abaixo.
		}
		else if($tipo == "Monitor"){
			$query = "SELECT * FROM glpi_monitors where id = $entity_id";
		}
		else if($tipo == "Dispositivo de rede"){
			$query = "SELECT * FROM glpi_networkequipments where id = $entity_id";
		}
		else if($tipo == "Impressora"){
			$query = "SELECT * FROM glpi_printers where id = $entity_id";
		}
		else if($tipo == "Telefone"){
			$query = "SELECT * FROM glpi_phones where id = $entity_id";
		}
		else if($tipo == "Dispositivo"){
			$query = "SELECT * FROM glpi_peripherals where id = $entity_id";
		} 
		else{
			die();
		}
		return $query;
	}

	$result = mysqli_query($conn, getData($tipo, $entity_id));
	
	if($result){
        while($row = mysqli_fetch_array($result)){
			
         	$nome = $row["name"];
			$serial = $row["serial"];
			$id_user = $row["users_id"];
			$cid = $row["manufacturers_id"];

			if($tipo == "Computador"){
				$aid = $row["computertypes_id"];
				$bid = $row["computermodels_id"];
				$query = "SELECT * FROM glpi_computertypes where id = $aid";
				$qmodel = "SELECT DISTINCT a.name, b.name, c.name FROM glpi_computertypes a, glpi_computermodels b, glpi_manufacturers c WHERE a.id = $aid and b.id = $bid and c.id = $cid";
			}
			else if($tipo == "Monitor"){
				$aid = $row["monitortypes_id"];
				$bid = $row["monitormodels_id"];
				$query = "SELECT * FROM glpi_monitors where id = $aid";
				$qmodel = "SELECT DISTINCT a.name, b.name, c.name FROM glpi_monitortypes a, glpi_monitormodels b, glpi_manufacturers c WHERE a.id = $aid and b.id = $bid and c.id = $cid";
			}
			else if($tipo == "Dispositivo de rede"){
				$aid = $row["networkequipmenttypes_id"];
				$bid = $row["networkequipmentmodels_id"];
				$query = "SELECT * FROM glpi_networkequipments where id = $aid";
				$qmodel = "SELECT DISTINCT a.name, b.name, c.name FROM glpi_networkequipmenttypes a, glpi_networkequipmentmodels b, glpi_manufacturers c WHERE a.id = $aid and b.id = $bid and c.id = $cid";
			}
			else if($tipo == "Impressora"){
				$aid = $row["printertypes_id"];
				$bid = $row["printermodels_id"];
				$query = "SELECT * FROM glpi_printers where id = $aid";
				$qmodel = "SELECT DISTINCT a.name, b.name, c.name FROM glpi_printertypes a, glpi_printermodels b, glpi_manufacturers c WHERE a.id = $aid and b.id = $bid and c.id = $cid";

			}
			else if($tipo == "Telefone"){
				$aid = $row["phonetypes_id"];
				$bid = $row["phonemodels_id"];
			$query = "SELECT * FROM glpi_phones where id = {$aid}";
				$qmodel = "SELECT DISTINCT a.name, b.name, c.name FROM glpi_phonetypes a, glpi_phonemodels b, glpi_manufacturers c WHERE a.id = $aid and b.id = $bid and c.id = $cid";			
			}			
			else if($tipo == "Dispositivo"){
				$aid = $row["peripheraltypes_id"];
				$bid = $row["peripheralmodels_id"];
			$query = "SELECT * FROM glpi_peripherals where id = {$aid}";
				$qmodel = "SELECT DISTINCT a.name, b.name, c.name FROM glpi_peripheraltypes a, glpi_peripheralmodels b, glpi_manufacturers c WHERE a.id = $aid and b.id = $bid and c.id = $cid";
			} 
			else{
				die();
			}

			$rModel = mysqli_query($conn, $qmodel);
				if($rModel){
					$rmow = mysqli_fetch_array($rModel);
					$modelo = $rmow;
				}
			$result = mysqli_query($conn, $query);
			if($result) {
				$row = mysqli_fetch_array($result);
				$tipo = $row['name'];
			} 
		}
    } 

	function getUser($id, $conn){
		$query = "SELECT name FROM glpi_users where id = $id";
		$resultName = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($resultName);
		return $row["name"];
	}

	function getRG($id, $conn){
		$query = "SELECT rgfield FROM glpi_plugin_fields_userrgs WHERE items_id = $id";
		$resultRG = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($resultRG);
		return $row["rgfield"];
	}

	$RG = getRG($id_user, $conn);
    $username = getUser($id_user, $conn);

	ob_start();
	switch(get_post_action('generate', 'manutencao')){
		case 'generate':
			require 'termoativo.php';
			break;
		case 'manutencao':
			require 'termomanut.php';
			break;
		default:
			require 'termomanut.php';
	}
	
		
	
?>
<?php 
	$content = ob_get_clean();
	$PDF->loadHtml($content);
	$PDF->render();
	header('Content-type: application/pdf');
	echo $PDF->output();
?>