<?php

class Actividades
{
    private $idactividad;
    private $nombre;
    private $descripcion;
    
     function __construct($idActividad, $nombre, $descripcion) {
       $this->idActividad = $idActividad;
       $this->nombre = $nombre;
       $this->descripcion = $descripcion;
     }

     function setIdActividad($idActividad){
       $this->idActividad = $idActividad;
     } 
     function getIdActividad(){
       return $this->idActividad;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
      function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
}

?> 
