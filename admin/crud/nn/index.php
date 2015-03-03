<html>
<head>
</head>
<?php
include_once("ActividadCollector.php");
$ActividadCollectorObj = new ActividadCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioActividadInsert.php">Nuevo</a></td></tr>
<?php                                                                                                    
foreach ($ActividadCollectorObj->readActividades() as $ObjActividad){
  echo "<tr>";
  echo "<td>".$ObjActividad->getIdActividad()."</td>";
  echo "<td>".$ObjActividad->getNombre()."</td>";
  echo "<td>".$ObjActividad->getDescripcion()."</td>";
  echo "<td><a href='formularioActividadEditar.php?id=".$ObjActividad->getIdActividad()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$ObjActividad->getIdActividad()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
