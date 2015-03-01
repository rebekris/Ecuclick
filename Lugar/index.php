<html>
<head>
</head>
<?php
include_once("LugarCollector.php");
$LugarCollectorObj = new LugarCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioLugarInsert.php">Nuevo</a></td></tr>
<?php
foreach ($LugarollectorObj->readLugares() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdLugar() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  echo "<td><a href='formularioLugarEditar.php?id=".$c->getIdLugar()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdLugar()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
