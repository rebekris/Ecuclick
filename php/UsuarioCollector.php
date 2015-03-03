<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuario($id) {
    $row = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array("{$id}")); 
    $objUsuario = new Usuario($row[0]{'idusuario'},$row[0]{'usuario'},$row[0]{'contrasena'});
    return $objUsuario	;
  }

  function createUsuario($usuario, $contrasena) {    
    $insertrow = self::$db->insertRow("INSERT INTO proyecto.usuario (idusuario, usuario, contrasena) VALUES (?, ?, ?)", array(null, "{$usuario}", "{$contrasena}"));
  }  

  function readUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'usuario'},$c{'contrsena'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
  
  function updateUsuario($id,$usuario) {    
    $insertrow = self::$db->updateRow("UPDATE proyecto.usuario SET usuario.usuario = ?, usuario.contrasena = ?   WHERE usuario.idusuario = ? ", array("{$contrasena}" ,"{$usuario}",$id));
  }  

  function deleteUsuario($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM proyecto.usuario WHERE idusuario= ?", array("{$id}"));
  }  



}
?>

