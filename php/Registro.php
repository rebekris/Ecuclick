<?php

class Registro
{
    private $idregistro;
    private $nombre;
	private $apellido;
	private $correo;
	private $contrasena;
    
     function __construct($idregistro, $nombre, $apellido, $correo, $contrasena) {
       $this->idregistro = $idregistro;
       $this->nombre = $nombre;
	   $this->apellido = $apellido;
	   $this->correo = $correo;
	   $this->contrasena = $contrasena;
     }
    
     function setIdRegistro($idregistro){
       $this->idregistro = $idregistro;
     } 
     function getIdRegistro(){
       return $this->idregistro;
     } 
	 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
	 
	 function setApellido($apellido){
       $this->apellido = $apellido;
     } 
     function getApellido(){
       return $this->apellido;
     }
	 
	 function setCorreo($correo){
       $this->correo = $correo;
     } 
     function getCorreo(){
       return $this->correo;
     } 
	 
	 function setContrasena($contrasena){
       $this->contrasena = $contrasena;
     } 
     function getContrasena(){
       return $this->contrasena;
     } 
}

?> 
