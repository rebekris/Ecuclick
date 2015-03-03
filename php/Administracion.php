<?php

class Administracion
{
    private $idadmin;
    private $nombre;
	private $clave;
	    
     function __construct($idadmin, $nombre, $clave) {
       $this->idadmin = $idadmin;
       $this->nombre = $nombre;
	   $this->clave = $clave;
     }
    
     function setidAdmin($idadmin){
       $this->idadmin = $idadmin;
     } 
     function getidAdmin(){
       return $this->idadmin;
     } 
	 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
	 
	 function setClave($clave){
       $this->clave = $clave;
     } 
     function getClave(){
       return $this->clave;
     } 
}

?> 
