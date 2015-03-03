<?php

class Usuario
{
    private $idusuario;
    private $usuario;
	private $contrasena;
	
    
     function __construct($idusuario, $usuario, $contrasena) {
       $this->idusuario = $idusuario;
       $this->usuario = $usuario;
	   $this->contrasena = $contrasena;
     }
    
     function setidUsuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getidUsuario(){
       return $this->idusuario;
     } 
     function setUsuario($usuario){
       $this->usuario = $usuario;
     } 
     function getUsuario(){
       return $this->usuario;
     } 
	 
	  function setContrasena($contrasena){
       $this->contrasena = $contrasena;
     } 
     function getContrasena(){
       return $this->contrasena;
     } 
}

?> 
