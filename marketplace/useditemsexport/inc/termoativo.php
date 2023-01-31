<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap-4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="styles.css"/>
    <title>Termo de responsabilidade</title>
    <style>
    <?php include 'styles.css'; ?>
    <?php include 'bootstrap.css'; ?>
    </style>
    <?php 
        function format_string($mask, $str, $ch = '#') {
            $c = 0;
            $rs = '';
            for ($i = 0; $i < strlen($mask); $i++) {
                if ($mask[$i] == $ch) {
                    $rs .= $str[$c];
                    $c++;
                } else {
                    $rs .= $mask[$i];
                }
            }
        
            return $rs;
    }?>
</head>
<body>
    
        <a href="http://www.gruposolutions.com.br"><img width="100%" src="../logo.png"/></a>
    <div>
        <p class="titulo mt-5 mb-5"><b>Termo de devolução</b></p>
        
        <div class="row">
            <div class="col">
                <p>Eu, <b><?php echo $username?></b>, portador do RG:<b><?php echo format_string('##.###.###-#', $RG);?></b> atesto que devolvi nesta data <b><?php echo date("d/m/Y");?></b> o(s) material(is) descrito(s) neste termo.
                    Autorizo expressa e inequivocamente a empresa ORION SERVICE CONTACT CENTER LTDA, a descontar do meu salário os valores referentes a danos causados por mim aos bens desta, no exercício das minhas funções, de forma dolosa (com intenção) ou culposa (negligência, imprudência ou imperícia), em atendimento ao preceituado no artigo 462, paragrafo 1º da CLT.
            </div>
        </div>
        <table style="width:100%">
            <tr>
                <th style="width: 50%;border: 1px solid #000000;">
                    Serial/IMEI
                </th>
                <th style="width: 25%;border: 1px solid #000000;">
                    Patrimônio
                </th>
                <th style="width: 25%;border: 1px solid #000000;">
                    Descrição
                </th>
            </tr>
            <tr>
                <td style="width: 50%;border: 1px solid #000000;">
                   <?php echo $serial; ?>
                </td>
                <td style="width: 25%;border: 1px solid #000000;">
                    <?php echo $nome; ?>
                </td>
                <td style="width: 25%;border: 1px solid #000000;">
                    <?php print_r($modelo[0]. " " . $modelo[2] . " " . $modelo[1]); ?>
                </td>
            </tr>
	    </table>
		<table style="border-collapse: collapse;width: 100%;" class="mt-5">
         <tr>
            <td >
               <strong>Observação:</strong>
            </td>
         </tr>
         <tr>
            <td style="border: 1px solid #000000; width: 100%; "><br><br>
            </td>
         </tr>
      </table>
     
      <table class="mt-3" style="border-collapse: collapse; width:100%">
         <tr>
            <td style="width: 50%; border-bottom: 1px solid #000000;">
               <strong>Grupo Solutions :</strong>
            </td>
            <td style="width: 50%; border-bottom: 1px solid #000000">
              <strong><?php echo $username?> :</strong>
            </td>
         </tr>
         <tr >
            <td style="border: 1px solid #000000; width: 50%; vertical-align: top">
              	Assinatura : <br><br><br>
            </td>
            <td style="border: 1px solid #000000; width: 50%; vertical-align: top;">
				Assinatura : <br><br><br>
            </td>
         </tr>
      </table>
    </div>
    
    <div class="mt-5 footer">
        <strong><p>São Paulo - SP <?php echo date("d/m/Y H:m");?></p></strong>
    </div>
</body>
</html>
