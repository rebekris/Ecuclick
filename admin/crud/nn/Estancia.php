<?php

class Estancia
{
    private $idestancia;
    private $nombre;
    private $descripcion;
    
     function __construct($idestancia, $nombre, $descripcion) {
       $this->idestancia = $idestancia;
       $this->nombre = $nombre;
       $this->descripcion = $descripcion;
     }

     function setIdEstancia($idestancia){
       $this->idestancia = $idestancia;
     } 
     function getIdEstancia(){
       return $this->idestancia;
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
