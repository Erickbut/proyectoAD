<?php

//error_reporting(E_ALL ^ E_DEPRECATED);
$hostname="localhost:3306";
$usuario="root";
$password="";
$basededatos="bddgestion_empleados";
$mysqli = new mysqli($hostname, $usuario, $password, $basededatos);
//$mysqli = new mysqli($hostname, $usuario, $password, $basededatos);
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    die("Error al conectar: ".mysqli_connect_error());
}



/*$serverName="FLA6346\sqlexpress";
$connectInfo=array("Database"=>'gestion',"UID"=>'sa',"PWD"=>'Univalle');
$conn=sqlsrv_connect($serverName,$connectInfo);

if( $conn ) {
    echo "Conexión establecida.<br />";
}else{
    echo "Conexión no se pudo establecer.<br />";
    die( print_r( sqlsrv_errors(), true));
}**/
?>
