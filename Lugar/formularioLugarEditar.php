<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Lugar</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("LugarCollector.php");
include_once("Lugar.php");
$LugarCollectorObj = new LugarCollector();
$ObjLugar = $LugarCollectorObj->showLugar($id);
?>
<h2>Editar Objeto Lugar </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idLugar" value="<?php echo $ObjLugar->getIdLugar(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjLugar->getNombre(); ?>" autofocus required />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
