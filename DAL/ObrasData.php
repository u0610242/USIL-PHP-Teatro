<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ObrasData
 *
 * @author ev1ls0ul
 */
require_once 'Coneccion.php';
class ObrasData {
    //put your code here
    public function Insertar(Obras $obras){
        $con = new Coneccion();
        $cn = $con->getConnection();
        
        $nombre = $obras->getNombre();
        $autor = $obras->getAutor();
        $director = $obras->getDirector();
        $sala = $obras->getSala();
        $horarios = $obras->getHorarios();
        $precio = $obras->getPrecio();
        $temporada = $obras->getTemporada();
        $afiche = $obras->getAfiche();
        $resena = $obras->getResena();
        
        $sql = "INSERT INTO obra (nombre,autor,director,sala,horarios,precio,temporada,afiche,resena) 
        VALUES ('$nombre','$autor','$director','$sala','$horarios',$precio,'$temporada','$afiche','$resena')";
        $res = mysql_query($sql);
         $con->closeConnection($cn);
        
        return $res;
    }
    public function Select(){
        $con = new Coneccion();
        $cn = $con->getConnection();
        
        $sql = "SELECT * FROM obra";
        $res = mysql_query($sql);
        $con->closeConnection($cn);
        
        return $res;
    }
  
}

?>
