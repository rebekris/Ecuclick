<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$idRegion=$_POST["idRegion"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("RegionCollector.php");
$RegionCollectorObj = new RegionCollector();
$RegionCollectorObj->updateRegion($idRegion,$nombre);

echo "id :".$idRegion." actualizado a:".$nombre." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
