<?php

include_once('Region.php');
include_once('Collector.php');

class RegionCollector extends Collector
{
  
  function showRegion($id) {
    $row = self::$db->getRows("SELECT * FROM Region where idRegion= ? ", array("{$id}")); 
    $ObjRegion = new Region($row[0]{'idRegion'},$row[0]{'nombre'});
    return $ObjRegion;
  }

  function createRegion($nombre) {    
    $insertrow = self::$db->insertRow("INSERT INTO clasedb.Region (idRegion, nombre) VALUES (?, ?)", array(null, "{$nombre}"));
  }  

  function readRegiones() {
    $rows = self::$db->getRows("SELECT * FROM Region ");        
    $arrayRegion= array();        
    foreach ($rows as $c){
      $aux = new Region($c{'iddRegion'},$c{'nombre'});
      array_push($arrayRegion, $aux);
    }
    return $arrayRegion;        
  }
  
  function updateRegion($id,$nombre) {    
    $insertrow = self::$db->updateRow("UPDATE clasedb.Region SET Region.nombre = ?  WHERE Region.idRegion = ? ", array( "{$nombre}",$id));
  }  

  function deleteRegion($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clasedb.Region WHERE idRegion= ?", array("{$id}"));
  }  



}
?>

