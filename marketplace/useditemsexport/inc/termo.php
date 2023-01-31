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
       
        <h3 class='center'><b>Termo de responsabilidade</b></h3>
        
        <div class="row mt-5">
                <p>Eu, <b><?php echo $User->getFriendlyName();?></b>, portador do RG:<b><?php echo format_string('##.###.###-#', $rg);?></b> atesto que recebi nesta data <b><?php echo date("d/m/Y");?></b> o(s) material(is) descrito(s) neste termo, para que possa exercer a função para o qual foi contratado, comprometendo-me em zelar e praticar as diligências necessárias para a obtenção de tal finalidade assumindo a responsabilidade pelo uso, integridade e conservação, sendo que, quando solicitado, ou quando cessarem as minhas atividades na empresa, a devolução dos referidos bens deve se proceder de forma imediata.
                    Autorizo expressa e inequivocamente a empresa ORION SERVICE CONTACT CENTER LTDA, a descontar do meu salário os valores referentes a danos causados por mim aos bens desta, no exercício das minhas funções, de forma dolosa (com intenção) ou culposa (negligência, imprudência ou imperícia), em atendimento ao preceituado no artigo 462, paragrafo 1º da CLT
                    Comprometendo-me a mantê-los em perfeito estado de conservação, ficando ciente de que:<br>
                    <b>1.</b> Se o equipamento for danificado ou inutilizado por emprego inadequado, mau uso, negligência ou extravio, a empresa me fornecerá novo equipamento e cobrará o valor de um equipamento da mesma marca ou equivalente ao da praça.<br>
                    <b>2.</b> Em caso de dano, inutilização, ou extravio do equipamento deverei comunicar imediatamente ao setor competente.<br>
                    <b>3.</b> Terminando os serviços ou no caso de rescisão do contrato de trabalho, devolverei o equipamento completo e em perfeito estado de conservação, considerando-se o tempo do uso do mesmo (tempo de vida útil), ao setor competente<br>
                    <b>4.</b> Estando os equipamentos em minha posse, estarei sujeito a inspeções sem prévio aviso<br>
                    <b>5.</b> Fico proibido de dar ou emprestar o equipamento que estiver sob minha responsabilidade, só podendo fazê-lo se receber ordem por escrito da pessoa autorizada para tal fim..</p>
            
        </div>
    </div>
    
</body>
</html>
