<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author ev1ls0ul
 */
class Persona {
    //put your code here
    private $nombre;
    private $apellido;
    private $correo;
    private $pass;    
      
    public function __construct(){
        $this->nombre = "";
        $this->apellido = "";
        $this->correo = "";
        $this->pass = "";
    }
    public function getPass() {
        return $this->pass;
    }
    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getCorreo() {
        return $this->correo;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }



}

?>
