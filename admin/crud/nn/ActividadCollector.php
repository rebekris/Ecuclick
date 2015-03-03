<?php

include_once('Actividades.php');
include_once('Collector.php');

class ActividadCollector extends Collector
{
  
  function showActividad($id) {
    $row = self::$db->getRows("SELECT * FROM actividad where idactividad= ? ", array("{$id}")); 
    $ObjActividad = new Actividades($row[0]{'idactividad'},$row[0]{'ac_nombre'}, $row[0]{'ac_descripcion'});
    return $ObjActividad;
  }

  function createActividad($nombre, $descripcion) {    
    $insertrow = self::$db->insertRow("INSERT INTO clasedb.actividad (idactividad, ac_nombre, ac_descripcion) VALUES (?, ?, ?)", array(null, "{$nombre}" , "{$descripcion}"));
  }  

  function readActividades() {
    $rows = self::$db->getRows("SELECT * FROM actividad ");        
    $arrayActividad= array();        
    foreach ($rows as $c){
      $aux = new Actividades($c{'idactividad'},$c{'ac_nombre'},$c{'ac_descripcion'});
      array_push($arrayActividad, $aux);
    }
    return $arrayActividad;        
  }
  
  function updateActividad($id,$nombre,$descripcion) {    
    $insertrow = self::$db->updateRow("UPDATE ecuadorbd.actividad SET actividad.ac_nombre = ? ,  actividad.ac_descripcion = ? WHERE actividad.idactividad = ? ", array( "{$nombre}", "{$descripcion}",$id));
  }  

  function deleteActividad($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM ecuadorbd.actividad WHERE idactividad= ?", array("{$id}"));
  }  



}
?>

