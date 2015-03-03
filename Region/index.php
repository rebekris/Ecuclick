<html>
<head>
</head>
<?php
include_once("RegionCollector.php");
$RegionCollectorObj = new RegionCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioRegionInsert.php">Nuevo</a></td></tr>
<?php
foreach ($RegionCollectorObj->readRegiones() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdRegion() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  echo "<td><a href='formularioRegionEditar.php?id=".$c->getIdRegion()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdRegion()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
