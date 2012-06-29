<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ComentarioData
 *
 * @author ev1ls0ul
 */
require_once 'Coneccion.php';
class ComentarioData {
    //put your code here
    public function Insert(Comentario $comentario){
        $con = new Coneccion();
        $cn = $con->getConnection();
        
        $id = $comentario->getId();
        $mensaje = $comentario->getMensaje();
        $user = $comentario->getUser();
        
        $sql = "INSERT INTO comentario (id, mensaje, user)VALUES($id,'$mensaje','$user')";
        $res = mysql_query($sql);
        $con->closeConnection($cn);
        
        return $res;
    }
    public function Select(Comentario $comentario){
        $con = new Coneccion();
        $cn = $con->getConnection();
        $id = $comentario->getId();
        
        $sql = "SELECT * FROM comentario WHERE id = $id";
        $res = mysql_query($sql);
        $con->closeConnection($cn);
        
        return $res;
    }
}

?>
