<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de LugarCollector
include_once("LugarCollector.php");
//creo una instancia de LugarCollector
$LugarCollectorObj = new LugarCollector();
//Ejecuto el metodo para eliminar el objeto Lugar indicando el id
$LugarCollectorObj->deleteLugar($id);

// muestro mensaje de que se ha eliminado el objeto Lugar
echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
