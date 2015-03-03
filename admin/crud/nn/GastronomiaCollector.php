<?php

include_once('Gastronomia.php');
include_once('Collector.php');

class GastronomiaCollector extends Collector
{
  
  function showGastronomia($id) {
    $row = self::$db->getRows("SELECT * FROM gastronomia where idgastronomia= ? ", array("{$id}")); 
    $ObjGastronomia = new Gastronomia($row[0]{'idgastronomia'},$row[0]{'ga_nombre'}, $row[0]{'ga_descripcion'});
    return $ObjGastronomia;
  }

  function createGastronomia($nombre, $descripcion) {    
    $insertrow = self::$db->insertRow("INSERT INTO clasedb.gastronomia (idgastronomia, ga_nombre, ga_descripcion) VALUES (?, ?, ?)", array(null, "{$nombre}" , "{$descripcion}"));
  }  

  function readGastronomiaes() {
    $rows = self::$db->getRows("SELECT * FROM gastronomia ");        
    $arrayGastronomia= array();        
    foreach ($rows as $c){
      $aux = new Gastronomia($c{'idgastronomia'},$c{'ga_nombre'},$c{'ga_descripcion'});
      array_push($arrayGastronomia, $aux);
    }
    return $arrayGastronomia;        
  }
  
  function updateGastronomia($id,$nombre,$descripcion) {    
    $insertrow = self::$db->updateRow("UPDATE ecuadorbd.gastronomia SET gastronomia.ga_nombre = ? ,  gastronomia.ga_descripcion = ? WHERE gastronomia.idgastronomia = ? ", array( "{$nombre}", "{$descripcion}",$id));
  }  

  function deleteGastronomia($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM ecuadorbd.gastronomia WHERE idgastronomia= ?", array("{$id}"));
  }  



}
?>

