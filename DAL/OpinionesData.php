<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OpinionesData
 *
 * @author ev1ls0ul
 */
require_once 'Coneccion.php';
class OpinionesData {
    //put your code here
    public function Insertar(Opiniones $opiniones){
        $con = new Coneccion();
        $cn = $con->getConnection();
        
        //$id = $opiniones->getIdObra();
        $puntaje = $opiniones->getPuntaje();
        $mensaje = $opiniones->getMensaje();
        
        $sql = "INSERT INTO opinion (puntaje,mensaje)VALUES
            ($puntaje,'$mensaje')";
        $res = mysql_query($sql);
        $con->closeConnection($cn);
        
        return $res;
    }
    
    public function Select(Opiniones $opiniones){
        $con = new Coneccion();
        $cn = $con->getConnection();
        $id = $opiniones->getIdObra();
        
        $sql = "SELECT * FROM opinion WHERE id = $id";
        $res = mysql_query($sql);
        $con->closeConnection($cn);
        
        return $res;
    }
    public function UpdatePuntos(Opiniones $opiniones){
        $con = new Coneccion();
        $cn = $con->getConnection();
        $id = $opiniones->getIdObra();
        $puntos = $opiniones->getPuntaje();
        
        $sql = "UPDATE opinion SET puntaje = puntaje+$puntos WHERE id = $id";
        $res = mysql_query($sql);
        $con->closeConnection($cn);
        
        return $res;
    }
}

?>
