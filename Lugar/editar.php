<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$idLugar=$_POST["idLugar"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("LugarCollector.php");
$LugarCollectorObj = new LugarCollector();
$LugarCollectorObj->updateLugar($idLugar,$nombre);

echo "id :".$idLugar." actualizado a:".$nombre." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
