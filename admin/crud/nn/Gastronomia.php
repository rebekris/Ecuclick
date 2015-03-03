<?php

class Gastronomia
{
    private $idgastronomia;
    private $nombre;
    private $descripcion;
    
     function __construct($idgastronomia, $nombre, $descripcion) {
       $this->idgastronomia = $idgastronomia;
       $this->nombre = $nombre;
       $this->descripcion = $descripcion;
     }
    
     function setIdGastronomia($idgastronomia){
       $this->idgastronomia = $idgastronomia;
     } 
     function getIdGastronomia(){
       return $this->idgastronomia;
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
