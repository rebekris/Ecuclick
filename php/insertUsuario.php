<html>
<head>
</head>

<body>
<div id="main">
<?php
$usuario=$_POST["email"];
$contrasena=$_POST["password"];

//$valor="manuel";
echo 'BIENVENIDO ' . "<br>" . htmlspecialchars($usuario) . '!';

include_once("UsuarioCollector.php");

$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->createUsuario($usuario, $contrasena);

?>
<div><a href="../index.html">Volver</a></div>
</div>
</body>
</html>
