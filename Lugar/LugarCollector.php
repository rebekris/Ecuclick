<?php

include_once('Lugar.php');
include_once('Collector.php');

class LugarCollector extends Collector
{
  
  function showLugar($id) {
    $row = self::$db->getRows("SELECT * FROM Lugar where idLugar= ? ", array("{$id}")); 
    $ObjLugar = new Lugar($row[0]{'idLugar'},$row[0]{'nombre'});
    return $ObjLugar;
  }

  function createLugar($nombre) {    
    $insertrow = self::$db->insertRow("INSERT INTO clasedb.Lugar (idLugar, nombre) VALUES (?, ?)", array(null, "{$nombre}"));
  }  

  function readLugares() {
    $rows = self::$db->getRows("SELECT * FROM Lugar ");        
    $arrayLugar= array();        
    foreach ($rows as $c){
      $aux = new Lugar($c{'idLugar'},$c{'nombre'});
      array_push($arrayLugar, $aux);
    }
    return $arrayLugar;        
  }
  
  function updateLugar($id,$nombre) {    
    $insertrow = self::$db->updateRow("UPDATE clasedb.Lugar SET Lugar.nombre = ?  WHERE Lugar.idLugar = ? ", array( "{$nombre}",$id));
  }  

  function deleteLugar($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clasedb.Lugar WHERE idLugar= ?", array("{$id}"));
  }  



}
?>

