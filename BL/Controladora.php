<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controladora
 *
 * @author ev1ls0ul
 */
require_once 'Persona.php';
require_once '../DAL/PersonaData.php';
require_once 'Obras.php';
require_once '../DAL/ObrasData.php';
require_once 'Opiniones.php';
require_once '../DAL/OpinionesData.php';
require_once 'Comentario.php';
require_once '../DAL/ComentarioData.php';
class Controladora {
    //put your code here
    public function RegistrarUsuario($nombre, $apellido, $correo, $pass){
        $persona = new Persona();
        $personaData = new PersonaData();
        
        $persona->setNombre($nombre);
        $persona->setApellido($apellido);
        $persona->setCorreo($correo);      
        $persona->setPass($pass);
        $res = $personaData->Insertar($persona);
        
        if($res){
            $string = "location:../PL/form.php?ref=1";            
        }else{
            $string = "location:../PL/form.php?ref=2";          
        }
        header($string);
    }
    public function RegistrarObras($nombre,$autor,$director,$sala,$horarios,$precio,$temporada,$afiche,$resena){
        $obra = new Obras();
        $obraData = new ObrasData();
        $opinion = new Opiniones();
        $opinionData = new OpinionesData();
        
        $obra->setNombre($nombre);
        $obra->setDirector($director);
        $obra->setAutor($autor);
        $obra->setSala($sala);
        $obra->setHorarios($horarios);
        $obra->setPrecio($precio);
        $obra->setTemporada($temporada);
        $obra->setAfiche($afiche);
        $obra->setResena($resena);
        
        $opinion->setPuntaje(0);
        $opinion->setMensaje('Se el Primero en Escribir un mensaje');
        
        $opinionData->Insertar($opinion);
        $res = $obraData->Insertar($obra);
        
        if($res){
            $string = "location:../PL/formObras.php?ref=1";            
        }else{
            $string = "location:../PL/formObras.php?ref=2";          
        }
        header($string);
    }
    public function MostrarObras(){
        $obrasData = new ObrasData();
        $res = $obrasData->Select();
        $string = "<table width='100%' border='1'><tr><th>Obra</th><th>Sala</th>
            <th>Horarios</th><th>Precio</th><th>Afiche</th><th>Reseña</th><th>Accion</th></tr>";
        $cuerpo = "";
        while ($row = mysql_fetch_array($res)){
            $cuerpo = "<tr><td>$row[1]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td><img src='$row[8]' width='120px' height='150px'/>
            </td><td>$row[9]</td><td><a href='Puntuar.php?id=$row[0]'>Puntuar</a><br><a href='Puntuar.php?id=$row[0]'>Comentar</a></td></tr>.$cuerpo";
            
        }
        $end = "</table>";
        
        $ret = $string.$cuerpo.$end;
        return $ret;
    }
    public function MostrarOpiniones($id){
        $opinion = new Opiniones();
        $opinionData = new OpinionesData();
        
        $opinion->setIdObra($id);
        $res = $opinionData->Select($opinion);
        $string = "<table width='100%' border='1'><tr><th>IdObra</th><th>Puntaje</th>
            <th>Comentarios</th><th>Nivel</th>";
        $cuerpo = "";
        while ($row = mysql_fetch_array($res)){
            if($row[1]<50){$img = "IMG/1.png";}elseif($row[1]<100){$img = "IMG/2.gif";}
            elseif($row[1]<150){$img = "IMG/3.jpg";}elseif($row[1]<200){$img = "IMG/4.gif";}else{$img = "IMG/5.jpg";}
            $cuerpo = "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td><image src='$img' width='50px' height='50px'/>
            </td>".$cuerpo;
        }
        $end = "</table>";
        
        $ret = $string.$cuerpo.$end;
        return $ret;
    }
    public function Puntuar($puntaje, $id){
        $opinion = new Opiniones();
        $opinionData = new OpinionesData();
        $opinion->setIdObra($id);
        $opinion->setPuntaje($puntaje);
        $opinionData->UpdatePuntos($opinion);
        
    }
    public function IngresarComentario($id, $mensaje, $user){
        
        $comentario = new Comentario();
        $comentarioData = new ComentarioData();
        
        $comentario->setId($id);
        $comentario->setMensaje($mensaje);
        $comentario->setUser($user);
        $comentarioData->Insert($comentario);
        header('location:../PL/Puntuar.php?ref=1&id='.$id);
    }
    public function MostrarComentarios($id){
        $comentario = new Comentario();
        $comentarioData = new ComentarioData();
        $mensajes = "";
        $comentario->setId($id);
        $res =  $comentarioData->Select($comentario);
        while ($row = mysql_fetch_array($res)){
            $mensajes = "<table width='100%' border='1'><tr><td>"."<b>".$row[2].":</b>".$row[1]."</td></tr></table>".$mensajes;
        }
        return $mensajes;
    }
    public function Login($correo,$pass){
        $persona = new Persona();
        $personaData = new PersonaData();
        
        $persona->setCorreo($correo);
        $persona->setPass($pass);
        
        $res = $personaData->Verificar($persona);
        while($row = mysql_fetch_array($res)){
            $r = $row[0];
        }
        
        if($r>0){
            $string = "location:../PL/Main.php";  
            session_start();
            $_SESSION['user'] = $correo;
        }else{
            $string = "location:../index.php?ref=2";          
        }
        
        header($string);
    }
    public function CerrarSesion(){
        session_start();
        session_destroy();
        header('location:../index.php');
    }
    
}

    if(isset($_POST['form_id'])){
        $control = new Controladora();
        $control->RegistrarUsuario($_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['pass']);
    }
    if(isset($_POST['formObras_id'])){
        $control = new Controladora();                            
            
            //$tamano = $_FILES["afiche"]['size'];
            //$tipo = $_FILES["afiche"]['type'];
            $archivo = $_FILES["afiche"]['name'];
            $prefijo = substr(md5(uniqid(rand())),0,6);

            if ($archivo != "") {
                
                $destino =  "../Afiches/".$prefijo."_".$archivo;
                if (copy($_FILES['afiche']['tmp_name'],$destino)) {
                    $control->RegistrarObras($_POST['nombre'], $_POST['autor'], $_POST['director'], $_POST['sala'],
                    $_POST['horarios'], $_POST['precio'], $_POST['temporada'], $destino, $_POST['resena']);
                } 
            } 
       
        
    }
    
    if(isset($_POST['mensaje'])){
        session_start();
        $control = new Controladora();
        $control->IngresarComentario($_POST['id'], $_POST['mensaje'], $_SESSION['user']);
    }
    if(isset($_POST['formRico'])){
        $control = new Controladora();
        $control->Login($_POST['user'], $_POST['pass']);
        
    }
    if(isset($_GET['sesion'])){
        if($_GET['sesion']=='off'){
            $control = new Controladora();
            $control->CerrarSesion();
        }
    }
?>
