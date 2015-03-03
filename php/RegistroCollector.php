<?php

include_once('Registro.php');
include_once('Collector.php');

class RegistroCollector extends Collector
{
  
  function showRegistro($id) {
    $row = self::$db->getRows("SELECT * FROM registro where idregistro= ? ", array("{$id}")); 
    $ObjRegistro = new Registro($row[0]{'idregistro'},$row[0]{'nombre'},$row[0]{'apellido'},$row[0]{'correo'},$row[0]{'contrasena'});
    return $ObjRegistro;
  }

  function createRegistro($nombre, $apellido, $correo, $contrasena) {    
    $insertrow = self::$db->insertRow("INSERT INTO proyecto.registro (idregistro, nombre, apellido, correo, contrasena) VALUES (?, ?, ?, ?, ?)", array(null, "{$nombre}", "{$apellido}", "{$correo}", "{$contrasena}"));
  }  

  function readRegistros() {
    $rows = self::$db->getRows("SELECT * FROM registro ");        
    $arrayRegistro= array();        
    foreach ($rows as $c){
      $aux = new Registro($c{'idregistro'},$c{'nombre'},$c{'apellido'},$c{'correo'},$c{'contrasena'});
      array_push($arrayRegistro, $aux);
    }
    return $arrayRegistro;        
  }
  
  function updateRegistro($id,$nombre,$apellido,$correo,$contrasena) {    
    $insertrow = self::$db->updateRow("UPDATE proyecto.registro SET registro.nombre = ?, registro.apellido = ?, registro.correo = ?, registro.contrasena = ?,   WHERE registro.idregistro = ? ", array( "{$contrasena}","{$correo}","{$apellido}","{$nombre}",$id));
  }  

  function deleteRegistro($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM proyecto.registro WHERE idregistro= ?", array("{$id}"));
  }  



}
?>

