<?php

include_once('Administracion.php');
include_once('Collector.php');

class AdministracionCollector extends Collector
{
  
  function showAdministracion($id) {
    $row = self::$db->getRows("SELECT * FROM administrador where idadmin= ? ", array("{$id}")); 
    $ObjAdministracion = new Administracion ($row[0]{'idadmin'},$row[0]{'nombre'},$row[0]{'clave'},);
    return $ObjAdministracion;
  }

  function createAdministracion($nombre, $calve) {    
    $insertrow = self::$db->insertRow("INSERT INTO proyecto.administrador (idadmin, nombre, clave) VALUES (?, ?, ?)", array(null, "{$nombre}", "{$clave}"));
  }  

  function readAdministracion() {
    $rows = self::$db->getRows("SELECT * FROM administrador ");        
    $arrayAdministracion= array();        
    foreach ($rows as $c){
      $aux = new Administracion($c{'idadmin'},$c{'nombre'},$c{'clave'});
      array_push($arrayAdministracion, $aux);
    }
    return $arrayAdministracion;        
  }
  
  function updateAdministracion($id,$nombre,$clave,) {    
    $insertrow = self::$db->updateRow("UPDATE proyecto.administrador SET administrador.nombre = ?, administrador.clave = ?,   WHERE administrador.idadmin = ? ", array( "{$clave}","{$nombre}",$id));
  }  

  function deleteAdministracion($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM proyecto.administrador WHERE idadmin= ?", array("{$id}"));
  }  



}
?>

