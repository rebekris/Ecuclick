<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Usuario</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("UsuarioCollector.php");
include_once("Usuario.php");
$UsuarioCollector = new UsuarioCollector();
$ObjUsuario = $UsuarioCollector->showUsuario($id);
?>
<h2>Editar Objeto Usuario </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idusuario" value="<?php echo $ObjUsuario->getIdUsuario(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjUsuario->getNombre(); ?>" autofocus required />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
