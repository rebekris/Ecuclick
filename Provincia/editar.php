<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$idProvincia=$_POST["idProvincia"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("ProvinciaCollector.php");
$ProvinciaCollectorObj = new ProvinciaCollector();
$ProvinciaCollectorObj->updateProvincia($idProvincia,$nombre);

echo "id :".$idProvincia." actualizado a:".$nombre." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
