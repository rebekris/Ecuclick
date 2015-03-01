<?php

class Lugar
{
    private $idLugar;
    private $nombre;
    
     function __construct($idLugar, $nombre) {
       $this->idLugar = $idLugar;
       $this->nombre = $nombre;
     }
    
     function setIdLugar($idLugar){
       $this->idLugar = $idLugar;
     } 
     function getIdLugar(){
       return $this->idLugar;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
}

?> 
