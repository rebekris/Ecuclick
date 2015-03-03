<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$idactividad=$_POST["idactividad"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("ActividadCollector.php");
$ActividadCollectorObj = new ActividadCollector();
$ActividadCollectorObj->updateActividad($idactividad,$nombre,$descripcion);

echo "id :".$idactividad." actualizado a:".$nombre." </br> ";
echo "<p> Descripci&oacute;n :".$descripcion." </br> </p>";
?>
<div><a href="../../index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
