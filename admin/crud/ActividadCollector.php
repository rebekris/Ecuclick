<?php

include_once('Actividades.php');
include_once('Collector.php');

class ActividadCollector extends Collector
{
  
  function showActividad($id) {
    $row = self::$db->getRows("SELECT * FROM actividad where idactividad= ? ", array("{$id}")); 
    $ObjActividad = new Actividad($row[0]{'idactividad'},$row[0]{'nombre'});
    return $ObjActividad;
  }

  function createActividad($nombre) {    
    $insertrow = self::$db->insertRow("INSERT INTO clasedb.actividad (idactividad, nombre, descripcion) VALUES (?, ?, ?)", array(null, "{$nombre}" , "{$descripcion}"));
  }  

  function readActividads() {
    $rows = self::$db->getRows("SELECT * FROM actividad ");        
    $arrayActividad= array();        
    foreach ($rows as $c){
      $aux = new Actividad($c{'idactividad'},$c{'nombre'},$c{'descripcion'});
      array_push($arrayActividad, $aux);
    }
    return $arrayActividad;        
  }
  
  function updateActividad($id,$nombre,$descripcion) {    
    $insertrow = self::$db->updateRow("UPDATE clasedb.actividad SET actividad.nombre = ?  WHERE actividad.idactividad = ? ", array( "{$nombre}",$id));
  }  

  function deleteActividad($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clasedb.actividad WHERE idactividad= ?", array("{$id}"));
  }  



}
?>

