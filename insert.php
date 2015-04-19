<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset ="UTF8">
	<title>Ejemplo Boostrap</title>
	<meta name="viewport" content="width = device-width">


  </head>
  <body>





<?php
// Conectar desde PHP a SAP BUSINESS ONE Y LISTAR SOCIOS by marlonfalcon.cl

$_TEMP = array();
$_TEMP["server"] = 'PC\SQLEXPRESS'; //server de base de datos
$_TEMP["database"] = 'SBODemoES'; //nombre de la base de datos
$_TEMP["username"] = 'marlon';
$_TEMP["password"] = '24741';
$connection_string = 'DRIVER={SQL SERVER};SERVER='. $_TEMP["server"] . ';DATABASE=' . $_TEMP["database"];
$conexion = odbc_connect($connection_string, $_TEMP["username"], $_TEMP["password"]);

unset( $connection_string ); //libera variables
unset( $_TEMP );

$cod ="B1011";
$name = "Falcon Tool";


$sql="INSERT INTO OITM (ItemCode,ItemName) VALUES ('".$cod."','".$name."')";
$result = odbc_exec($conexion, $sql);



?>




</div>


</body>