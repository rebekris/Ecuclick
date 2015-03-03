<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];



include_once("ActividadCollector.php");

$ActividadCollectorObj = new ActividadCollector();
$ActividadCollectorObj->createUsuario($nombre, $descripcion);

echo "valor agregado </br>";
?>
<div><a href="../../index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
