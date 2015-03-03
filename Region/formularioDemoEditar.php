<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Region</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("RegionCollector.php");
include_once("Region.php");
$RegionCollectorObj = new RegionCollector();
$ObjRegion = $RegionCollectorObj->showRegion($id);
?>
<h2>Editar Objeto Region </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idRegion" value="<?php echo $ObjRegion->getIdRegion(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjRegion->getNombre(); ?>" autofocus required />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
