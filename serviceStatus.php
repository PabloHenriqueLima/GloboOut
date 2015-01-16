<?php
/** Jesus Cristo - O Senhor e Salvador da Terra. **/ 
require 'config/sqlConfig.php';
$codigoServico = $_POST['codigoServico'];
$query = "SELECT equipamento,dataEntrada,statusServico,nomeCliente FROM entrada ent INNER JOIN clientes cli ON ent.idCliente = cli.id WHERE ent.codigoServico = ?";
$sql = $mysqli->prepare($query);
$sql->bind_param('s',$codigoServico);
$sql->execute();
$sql->store_result();
$sql->bind_result($equipamento,$entrada,$status,$cliente);
$sql->fetch();
$entrada = strtotime($entrada);
$entrada = date("d-m-Y H:i",$entrada);

$query = "SELECT referente,valor from orcamento WHERE codigoServico = ?";
$sql = $mysqli->prepare($query);
$sql->bind_param('s',$codigoServico);
$sql->execute();
$sql->store_result();
$sql->bind_result($referente,$valor);
$sql->fetch();
if($sql->num_rows >0) {
    $orc = true;
}

if($orc){
   $data = [
       'equipamento'=>$equipamento,
       'dataEntrada'=>$entrada,
       'status'=>$status,
       'cliente'=>$cliente,
       'referente'=>$referente,
        'valor'=>$valor
   ];
    echo $dadosJSON = json_encode($data);

}else{
    $data = [
        'equipamento'=>$equipamento,
        'dataEntrada'=>$entrada,
        'status'=>$status,
        'cliente'=>$cliente
    ];
    echo $dadosJSON = json_encode($data);
}
