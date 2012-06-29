<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Opiniones
 *
 * @author ev1ls0ul
 */
class Opiniones {
    //put your code here
    private $idObra;
    private $puntaje;
    private $mensaje;
    
    function __construct() {
        $this->idObra = "";
        $this->puntaje = "";
        $this->mensaje = "";
    }
    public function getIdObra() {
        return $this->idObra;
    }

    public function getPuntaje() {
        return $this->puntaje;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function setIdObra($idObra) {
        $this->idObra = $idObra;
    }

    public function setPuntaje($puntaje) {
        $this->puntaje = $puntaje;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }



}

?>
