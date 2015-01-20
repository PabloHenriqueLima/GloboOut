<?php
/** Jesus Cristo - O Senhor e Salvador da Terra. **/
require 'config/sqlConfig.php';

extract($_POST);

$query = "UPDATE orcamento set aprovado = ? WHERE codigoServico = ?";
if(!$sql = $mysqli->prepare($query)); echo $mysqli->error;
$x = 'x';
$sql->bind_param('ss',$x,$codigoOrcamento);
if(!$sql->execute()) echo $mysqli->error;

echo $codigoOrcamento;
