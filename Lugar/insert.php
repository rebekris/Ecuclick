<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["nombre"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor) . '!';

include_once("LugarCollector.php");

$LugarCollectorObj = new LugarCollector();
$LugarCollectorObj->createLugar($valor);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
