<?php
include 'function_login.php';
conectar_base_de_datos();

$mail= $_POST["mail"];
$clave = $_POST["clave"];

$ini="SELECT mail, clave FROM turista WHERE mail='".$mail."' AND clave= '".$clave."'";
$peticion = mysql_query($ini);
$registro = mysql_fetch_array($peticion); 
if($registro[0]!=null)
{
	$pedir= mysql_result($peticion);
	echo "BIENVENIDO Turista";
	
    
}
else
{
	echo "Usuario o clave incorrecta";
}

desconectar_base_datos();

?>