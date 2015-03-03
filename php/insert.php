<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["email"];
$clave=$_POST["password"];

echo 'Hola ' . htmlspecialchars($nombre) . '!';

include_once("AdministracionCollector.php");

$AdministracionCollectorObj = new AdministracionCollector();
$AdministracionCollectorObj->createAdministracion($nombre, $clave);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
