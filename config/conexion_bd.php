<?php

//DATOS DE CONEXION
define('DB_HOST', 'lmpm.cs2tiizz9wfu.us-east-1.rds.amazonaws.com');
define('DB_USER', 'root');
define('DB_PASS', 'yharianyelipurizacaramirez');
define('DB_NAME', 'LMPM');

//FUNCION DE CONEXION
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//VALIDAR SI NO SE PUDO CONECTAR
if(!$con){
die('Imposible conectarse: '.mysqli_error($con));
exit();
exit();
}
if(mysqli_connect_errno()){
die('Conexion fallo: '.mysqli_connect_errno().' : '. mysqli_connect_error());
exit();
exit();
}

//CHARSET DE LA CONEXION
mysqli_set_charset($con, 'utf8');