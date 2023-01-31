<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
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
    
        <div class="col"><a href="http://www.gruposolutions.com.br"><img src="../logo.png"/></a></div>
       
        <h3 class='center'><b>Termo de devolução</b></h3>
        
        <div class="row mt-5">
            <div class="col">
                <p>Eu, <b><?php echo $User->getFriendlyName();?></b>, portador do RG:<b><?php echo format_string('##.###.###-#', $rg);?></b> atesto que devolvi nesta data <b><?php echo date("d/m/Y");?></b> o(s) material(is) descrito(s) neste termo.
                    Autorizo expressa e inequivocamente a empresa ORION SERVICE CONTACT CENTER LTDA, a descontar do meu salário os valores referentes a danos causados por mim aos bens desta, no exercício das minhas funções, de forma dolosa (com intenção) ou culposa (negligência, imprudência ou imperícia), em atendimento ao preceituado no artigo 462, paragrafo 1º da CLT.
            </div>
        </div>
    </div>
    
</body>
</html>
