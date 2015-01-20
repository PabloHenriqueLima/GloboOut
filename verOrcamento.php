<?php
/** Jesus Cristo - O Senhor e Salvador da Terra. **/ 
require 'config/sqlConfig.php';

extract($_POST);
$query = "SELECT aprovado from orcamento WHERE codigoServico = ?";
if(!$sql = $mysqli->prepare($query)); echo $mysqli->error;
$sql->bind_param('s',$codigoOrcamento);
if(!$sql->execute()) echo $mysqli->error;
$sql->store_result();
$sql->bind_result($aprovado);
$sql->fetch();

if($aprovado) echo true;

