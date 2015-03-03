<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuario($id) {
    $row = self::$db->getRows("SELECT * FROM usuario where id_usuario= ? ", array("{$id}")); 
    $objUsuario = new Usuario($row[0]{'id_usuario'},$row[0]{'nombre'});
    return $objUsuario	;
  }

  function createUsuario($nombre) {    
    $insertrow = self::$db->insertRow("INSERT INTO ejemplo.usuario (id_usuario, nombre) VALUES (?, ?)", array(null, "{$nombre}"));
  }  

  function readUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'id_usuario'},$c{'nombre'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
  
  function updateUsuario($id,$nombre) {    
    $insertrow = self::$db->updateRow("UPDATE ejemplo.usuario SET usuario.nombre = ?  WHERE usuario.id_usuario = ? ", array( "{$nombre}",$id));
  }  

  function deleteUsuario($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM ejemplo.usuario WHERE id_usuario= ?", array("{$id}"));
  }  



}
?>

