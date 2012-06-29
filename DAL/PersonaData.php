<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonaData
 *
 * @author ev1ls0ul
 */
require_once 'Coneccion.php';
class PersonaData {
    //put your code here
    public function Insertar(Persona $persona){
        $con = new Coneccion();
        $cn = $con->getConnection();
        
        $nombre = $persona->getNombre();
        $apellido = $persona->getApellido();
        $correo = $persona->getCorreo();
        $pass = $persona->getPass();
        $sql = "INSERT INTO persona (nombre,apellido,correo,pass)VALUES
            ('$nombre','$apellido','$correo', '$pass')";
        $res = mysql_query($sql);   
        
        $con->closeConnection($cn);
        return $res;
    }
    public function Verificar(Persona $persona){
        $con = new Coneccion();
        $cn = $con->getConnection();
        
        $correo = $persona->getCorreo();
        $pass = $persona->getPass();
        
        $sql = "SELECT COUNT(id) FROM persona WHERE correo = '$correo' AND pass = '$pass'";
        $res = mysql_query($sql);  
        $con->closeConnection($cn);
        
        return $res;
    }
}

?>
