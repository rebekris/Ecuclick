<?php

/**
$salt = '34a@$#aA9823$';
$password = 'carluys1234';
$password = hash('sha256', $salt . $password);
*/
ini_set('display_errors', 0);


//include('seguridad_basica.php');
$username = $_POST['user'];
$password = $_POST['pass'];
$passCrypto = hash('sha256',$salt, $password);


function conectar_base_de_datos()
{
/*$host = "localhost";
$user = "carlos_ariel@hotmail.com";
$password = "123";
$db = "turismo";*/
$conn = mysql_connect('localhost','carlos_ariel@hotmail.com"','123') OR die("Unable to connect to the database");
mysql_select_db('turismo',$conn) OR die("can not select the database");

}

function desconectar_base_de_datos()
{
	// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
}


function comprobar_base_datos()
{
conectar_base_de_datos();
		$q = "SELECT * FROM usuario_turista where nombre='$user' AND clave='$password'";
$result = mysql_query($q);
$longitud = mysql_fetch_lengths($resultado);
		if( $longitud == 0)
		{
			echo 'Usuario no encontrado';
			header('Location: login.html');
		}
		else
		{
			session_start();
			$reg = mysqli_fetch_assoc($result);
			$_SESSION["userlogin"] = $vo_usuario;
			header("location:principal.php");
		}
}

?>