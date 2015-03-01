<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de RegionCollector
include_once("RegionCollector.php");
//creo una instancia de RegionCollector
$RegionCollectorObj = new RegionCollector();
//Ejecuto el metodo para eliminar el objeto Region indicando el id
$RegionCollectorObj->deleteRegion($id);

// muestro mensaje de que se ha eliminado el objeto Region
echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
