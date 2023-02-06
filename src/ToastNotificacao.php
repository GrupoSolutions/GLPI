<?php
$sqlcon = mysqli_connect('localhost', 'root', '', 'base_104', '3306'); // ALTERAR AO SUBIR PARA PROD

$GLOBALS['sqlcon'] = $sqlcon;
$ticket = [];

    $sqlTicket = "SELECT users_id_recipient FROM glpi_tickets WHERE id = 216";
    $recipient = mysqli_query($sqlcon, $sqlTicket);
    $arr = [];
    $recip = 0;
    if($recipient){
        while($row = mysqli_fetch_array($recipient)){
            array_push($arr, $row);
        $recip = $row[0];
        }
    }

function atribuirChamado($user_id, $ticket_id){
    $sqlcon = $GLOBALS['sqlcon'];
    $sqlVerificacao = "SELECT * FROM glpi_tickets_users WHERE tickets_id = {$ticket_id} and users_id = {$user_id}";
    $executa_query = mysqli_query($sqlcon, $sqlVerificacao);
    $conta_linhas = mysqli_num_rows($executa_query);

    $ticket = [];
    $recip = 0;
    $sqlTicket = "SELECT users_id_recipient FROM glpi_tickets WHERE id = $ticket_id";
    $recipient = mysqli_query($sqlcon, $sqlTicket);
    if($recipient) {
        while($row = mysqli_fetch_array($recipient)){
            array_push($ticket, $row);
            $recip = $row[0];
        }
    }
    print_r($ticket[0]);
    $userRecip = $ticket[0];
//users_id_recipient
    echo $conta_linhas;
    if($conta_linhas == 0){
        $sqlInsere = "INSERT INTO glpi_tickets_users(tickets_id, users_id, type, use_notification) VALUES({$ticket_id}, {$user_id}, 2, 1)";
        mysqli_query($sqlcon, $sqlInsere);
        $data = date("Y-m-d H:i:s");
        $sqlStatus = "UPDATE glpi_tickets SET status=2 WHERE id = $ticket_id";
        mysqli_query($sqlcon, $sqlStatus);


        $sqlNotificacao = "INSERT INTO glpi_queuednotification(itemtype, items_id, notificationtemplates_id, create_time, send_time, recipient, mode) VALUES ('Ticket', {$ticket_id}, 65, $data, $data, {$recip}, ajax) ";
        mysqli_query($sqlcon, $sqlNotificacao);
    }
    else{
        return;
    }

}

function buscarNovosChamados($user_id){
   $sqlcon = $GLOBALS['sqlcon'];
    $notificacoes = [];
    $newTickets = [];
    $sqlNotificacoes = "SELECT c.id, c.items_id, c.notificationtemplates_id as tipoChamado, c.recipient, c.is_deleted, u.id as ticketID, u.status, u.users_id_lastupdater as lastUpdater FROM glpi_queuednotifications c INNER JOIN glpi_tickets u on (c.items_id = u.id) WHERE c.recipient = {$user_id} ";
    $retorno = mysqli_query($sqlcon, $sqlNotificacoes);
    
    if($retorno) {
        while($row = mysqli_fetch_array($retorno)){
            array_push($notificacoes, $row);
        }
    }

    foreach($notificacoes as $notificacao){
        if ($notificacao['status'] == 1 and $notificacao['tipoChamado'] == 66 and $notificacao['is_deleted'] != 0) {
            $update = "UPDATE glpi_queuednotifications SET is_deleted = 0 WHERE id = {$notificacao['id']}";
            mysqli_query($sqlcon, $update);
        }
        if($notificacao['status'] == 1 and $notificacao['tipoChamado'] == 66 and $notificacao['is_deleted'] == 0 and $notificacao['lastUpdater'] != $user_id){
            array_push($newTickets, $notificacao['ticketID']);
        }
    }
    

   return $newTickets;
}
function buscarRespostaChamados($user_id){
    $sqlcon = $GLOBALS['sqlcon'];
    $notificacoes = [];
    $unresolvedTickets = [];
    
    $sqlNotificacoes = "SELECT c.id, c.items_id, c.notificationtemplates_id as tipoChamado, c.recipient, c.is_deleted, u.id as ticketID, u.status, u.users_id_lastupdater as lastUpdater FROM glpi_queuednotifications c INNER JOIN glpi_tickets u on (c.items_id = u.id) WHERE c.recipient = {$user_id} ";
    $retorno = mysqli_query($sqlcon, $sqlNotificacoes);
    
    if($retorno) {
        while($row = mysqli_fetch_array($retorno)){
            array_push($notificacoes, $row);
        }
    }

    foreach($notificacoes as $notificacao){
        if ($notificacao['status'] == 2 and $notificacao['tipoChamado'] == 65 and $notificacao['is_deleted'] != 0) {
            $update = "UPDATE glpi_queuednotifications SET is_deleted = 0 WHERE id = {$notificacao['id']}";
            mysqli_query($sqlcon, $update);
        }
        if($notificacao['status'] == 2 and $notificacao['tipoChamado'] == 65 and $notificacao['is_deleted'] == 0 and $notificacao['lastUpdater'] != $user_id){
            array_push($unresolvedTickets, $notificacao['ticketID']);
        }
    }
    return $unresolvedTickets;
}



?>