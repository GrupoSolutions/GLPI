<div onclick="showDiv()"><a class='btn button-primary'>Relatório de Solicitações</a></div>

<form id="relatorio_soli" method="post" action="/glpi/src/Relatorios.php">
    <div style="margin-top:15px;display:none;" id="relatorio_solicitacao">
        <div>
            <div style="float:left;">
                <div><label>Data Inicial:</label></div>
                <input type="date" id="data_inicial" name="data_inicial" required>
            </div>
            <div>
                <div><label>Data Final:</label></div>
                <input type="date" id="data_final" blur="" name="data_final" required>
            </div>
        </div>
        <div style="float:left;">
            <div><label>Status:</label></div>
            <select name="status" id="status">
                <option value="0">Todos</option>
                <option value="1">Aprovado</option>
                <option value="102">Recusado</option>
                <option value="101">Em Aberto</option>
            </select>
            <button type="submit" class="btn btn-primary" onclick="return checaDatas()" id="envio">Gerar Relatório</button>
        </div>
    </div>
</form>

<script>
function checaDatas(){
    const data_inicial = document.getElementById('data_inicial').value;
    const data_final = document.getElementById('data_final').value;
    const status = document.getElementById('status').value;
    
    if(data_inicial > data_final){
        setTimeout(alert("Insira um intervalo de datas válido."), 4000);
        return false;
    } else{
        return true;
    }
}
function showDiv(){
    const divHide = document.getElementById('relatorio_solicitacao');
    divHide.style.display === "none" ? divHide.style.display = "block" : divHide.style.display = "none";
}
</script>