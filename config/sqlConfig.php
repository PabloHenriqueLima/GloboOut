<?php
/** Jesus Cristo - O Senhor e Salvador da Terra. **/

$ip_mysql ="dbmy0053.whservidor.com";
$login_mysql ="globoinfor1";
$senha_mysql ="GloboSec2415";
$database_mysql="globoinfor1";
$error_msg ="Não foi possível conectar ao banco de dados: ";



$mysqli = new mysqli($ip_mysql,$login_mysql,$senha_mysql,$database_mysql);
$mysqli->set_charset("utf8");
if (mysqli_connect_errno()) {
    die($error_msg . mysqli_connect_error());
}
