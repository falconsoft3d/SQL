<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset ="UTF8">
	<title>Ejemplo Listar SQL - SAP</title>
	<meta name="viewport" content="width = device-width">
	<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->


  </head>
  <body>



  	<div class="container">


  		<div class="tabla">
  			<table class="table table-hover">
  				<thead>
  					<tr>
  						<th>COD</th>
  						<th>NAME</th>
  						<th>PHONE</th>
  						<th>PER CONTACTO</th>
  						<th>MAIL</th>
  					</tr>
  				</thead>
  				<tbody>



<?php
$_TEMP = array();
$_TEMP["server"] = 'PC\SQLEXPRESS'; //server de base de datos
$_TEMP["database"] = 'SBODemoES'; //nombre de la base de datos
$_TEMP["username"] = 'marlon';
$_TEMP["password"] = '24741';
$connection_string = 'DRIVER={SQL SERVER};SERVER='. $_TEMP["server"] . ';DATABASE=' . $_TEMP["database"];
$conexion = odbc_connect($connection_string, $_TEMP["username"], $_TEMP["password"]);

unset( $connection_string ); //libera variables
unset( $_TEMP );

$sql="select * from OCRD";
$resultado = odbc_exec($conexion, $sql);
while ($field = odbc_fetch_object($resultado))
{
	echo "<tr>";
	echo "<td>".utf8_encode($field->CardCode)."</td>";
	echo "<td>".utf8_encode($field->CardName)."</td>";
	echo "<td>".utf8_encode($field->Phone1)."</td>";
	echo "<td>".utf8_encode($field->CntctPrsn)."</td>";
	echo "<td>".utf8_encode($field->E_Mail)."</td>";
	echo "</tr>";
}
?>




</div>


</body>

</html>