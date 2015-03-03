<html>
<head>
</head>
<?php
include_once("ProvinciaCollector.php");
$ProvinciaCollectorObj = new ProvinciaCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioProvinciaInsert.php">Nuevo</a></td></tr>
<?php
foreach ($ProvinciaCollectorObj->readProvincias() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdProvincia() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  echo "<td><a href='formularioProvinciaEditar.php?id=".$c->getIdProvincia()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdProvincia()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
