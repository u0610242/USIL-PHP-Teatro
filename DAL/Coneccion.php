<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Coneccion
 *
 * @author ev1ls0ul
 */
class Coneccion {
    //put your code here
    private $host;
    private $user;
    private $pass;
    private $database;
    
    public function __construct() {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass  = "";
        $this->database = "final";
    }
    
    public function getConnection(){
        $cn = mysql_connect($this->host,$this->user,$this->pass);
        mysql_select_db($this->database, $cn);
        return $cn;
    }
    public function closeConnection($cn){
        mysql_close($cn);
    }
}

?>
