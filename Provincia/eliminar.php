<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de ProvinciaCollector
include_once("ProvinciaCollector.php");
//creo una instancia de ProvinciaCollector
$ProvinciaCollectorObj = new ProvinciaCollector();
//Ejecuto el metodo para eliminar el objeto Provincia indicando el id
$ProvinciaCollectorObj->deleteProvincia($id);

// muestro mensaje de que se ha eliminado el objeto Provincia
echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
