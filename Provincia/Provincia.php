<?php

class Provincia
{
    private $idProvincia;
    private $nombre;
    
     function __construct($idProvincia, $nombre) {
       $this->idProvincia = $idProvincia;
       $this->nombre = $nombre;
     }
    
     function setIdProvincia($idProvincia){
       $this->idProvincia = $idProvincia;
     } 
     function getIdProvincia(){
       return $this->idProvincia;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
}

?> 
