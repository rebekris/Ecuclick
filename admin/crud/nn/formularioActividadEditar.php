<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Actividades</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("ActividadCollector.php");
include_once("Actividades.php");
$ActividadCollectorObj = new ActividadCollector();
$ObjActividad = $ActividadCollectorObj->showActividad($id);
?>
<h2>Editar  Actividades de los centros turisticos </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idactividad" value="<?php echo $ObjActividad->getIdActividad(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjActividad->getNombre(); ?>" autofocus required /> </p>
<p>
Desccripción: <textarea rows="3" cols="100" name="descripcion"><?php echo $ObjActividad->getDescripcion(); ?></textarea>
</p>
<a href="../../index.html">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
