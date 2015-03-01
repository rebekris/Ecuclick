<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Provincia</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("ProvinciaCollector.php");
include_once("Provincia.php");
$ProvinciaCollectorObj = new ProvinciaCollector();
$ObjProvincia = $ProvinciaCollectorObj->showProvincia($id);
?>
<h2>Editar Objeto Provincia </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idProvincia" value="<?php echo $ObjProvincia->getIdProvincia(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjProvincia->getNombre(); ?>" autofocus required />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
