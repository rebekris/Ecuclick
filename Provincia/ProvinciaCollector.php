<?php

include_once('Provincia.php');
include_once('Collector.php');

class ProvinciaCollector extends Collector
{
  
  function showProvincia($id) {
    $row = self::$db->getRows("SELECT * FROM Provincia where idProvincia= ? ", array("{$id}")); 
    $ObjProvincia = new Provincia($row[0]{'idProvincia'},$row[0]{'nombre'});
    return $ObjProvincia;
  }

  function createProvincia($nombre) {    
    $insertrow = self::$db->insertRow("INSERT INTO clasedb.Provincia (idProvincia, nombre) VALUES (?, ?)", array(null, "{$nombre}"));
  }  

  function readProvincias() {
    $rows = self::$db->getRows("SELECT * FROM Provincia ");        
    $arrayProvincia= array();        
    foreach ($rows as $c){
      $aux = new Provincia($c{'idProvincia'},$c{'nombre'});
      array_push($arrayProvincia, $aux);
    }
    return $arrayProvincia;        
  }
  
  function updateProvincia($id,$nombre) {    
    $insertrow = self::$db->updateRow("UPDATE clasedb.Provincia SET Provincia.nombre = ?  WHERE Provincia.idProvincia = ? ", array( "{$nombre}",$id));
  }  

  function deleteProvincia($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clasedb.Provincia WHERE idProvincia= ?", array("{$id}"));
  }  



}
?>

