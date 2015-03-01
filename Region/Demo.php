<?php

class Region
{
    private $idRegion;
    private $nombre;
    
     function __construct($idRegion, $nombre) {
       $this->idRegion = $idRegion;
       $this->nombre = $nombre;
     }
    
     function setIdRegion($idRegion){
       $this->idRegion = $idRegion;
     } 
     function getIdRegion(){
       return $this->idRegion;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
}

?> 
