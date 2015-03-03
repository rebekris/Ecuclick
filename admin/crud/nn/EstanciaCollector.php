<?php

include_once('Estancia.php');
include_once('Collector.php');

class EstanciaCollector extends Collector
{
  
  function showEstancia($id) {
    $row = self::$db->getRows("SELECT * FROM estancia where idestancia= ? ", array("{$id}")); 
    $ObjEstancia = new Estancia($row[0]{'idestancia'},$row[0]{'est_nombre'}, $row[0]{'est_descripcion'});
    return $ObjEstancia;
  }

  function createEstancia($nombre, $descripcion) {    
    $insertrow = self::$db->insertRow("INSERT INTO clasedb.estancia (idestancia, est_nombre, est_descripcion) VALUES (?, ?, ?)", array(null, "{$nombre}" , "{$descripcion}"));
  }  

  function readEstanciaes() {
    $rows = self::$db->getRows("SELECT * FROM estancia ");        
    $arrayEstancia= array();        
    foreach ($rows as $c){
      $aux = new Estancia($c{'idestancia'},$c{'est_nombre'},$c{'est_descripcion'});
      array_push($arrayEstancia, $aux);
    }
    return $arrayEstancia;        
  }
  
  function updateEstancia($id,$nombre,$descripcion) {    
    $insertrow = self::$db->updateRow("UPDATE ecuadorbd.estancia SET estancia.est_nombre = ? ,  estancia.est_descripcion = ? WHERE estancia.idestancia = ? ", array( "{$nombre}", "{$descripcion}",$id));
  }  

  function deleteEstancia($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM ecuadorbd.estancia WHERE idestancia= ?", array("{$id}"));
  }  

}
?>

