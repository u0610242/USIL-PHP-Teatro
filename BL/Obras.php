<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Obras
 *
 * @author ev1ls0ul
 */
class Obras {
    //put your code here
    private $id;
    private $nombre;
    private $autor;
    private $director;
    private $sala;
    private $horarios;
    private $precio;
    private $temporada;
    private $afiche;
    private $resena;
    
    function __construct() {
        $this->id = "";
        $this->nombre = "";
        $this->autor = "";
        $this->director = "";
        $this->sala = "";
        $this->horarios = "";
        $this->precio = "";
        $this->temporada = "";
        $this->afiche = "";
        $this->resena = "";

    }
    public function getId(){
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getDirector() {
        return $this->director;
    }

    public function getSala() {
        return $this->sala;
    }

    public function getHorarios() {
        return $this->horarios;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getTemporada() {
        return $this->temporada;
    }

    public function getAfiche() {
        return $this->afiche;
    }

    public function getResena() {
        return $this->resena;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setDirector($director) {
        $this->director = $director;
    }

    public function setSala($sala) {
        $this->sala = $sala;
    }

    public function setHorarios($horarios) {
        $this->horarios = $horarios;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setTemporada($temporada) {
        $this->temporada = $temporada;
    }

    public function setAfiche($afiche) {
        $this->afiche = $afiche;
    }

    public function setResena($resena) {
        $this->resena = $resena;
    }
    public function getPuntaje() {
        return $this->puntaje;
    }
   
}

?>
