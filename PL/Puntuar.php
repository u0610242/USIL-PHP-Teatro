<?php
session_start();
if(isset($_SESSION['user'])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Listado de Obras</title>
<link rel="stylesheet" type="text/css" href="Styles/view.css" media="all">
<script type="text/javascript" src="Styles/view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="IMG/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Listado de Obras</a></h1>
							<div class="form_description">
			<h2>Puntuar y comentar Obras</h2>
                        <?php
                            require_once '../BL/Controladora.php';                            
                            $control = new Controladora();
                            $id = $_GET['id'];
                            
                            if(isset($_GET['p'])){
                                $control->Puntuar($_GET['p'], $id);
                            }
                            
                            $res = $control->MostrarOpiniones($id);
                            echo $res;
                          
                        ?>
                        <a href="Puntuar.php?p=5&id=<?php echo $id ?>">Me gusta</a></br>
                        <a href="Puntuar.php?p=-3&id=<?php echo $id ?>">No me gusta</a>
                        </br>
                        </br>
                        <a href="MostrarObras.php">Regresar</a>
                        <div>
                        <?php
                            $res = $control->MostrarComentarios($id);
                            echo $res;
                        ?>
                        </div>
                                                        </br></br>
                        <form id="form1" name="form1" method="post" action="../BL/Controladora.php">
                          <label for="mensaje">Escribe tu comentario</label><br />                          
                          <textarea name="mensaje" id="mensaje" cols="45" rows="5"></textarea>
                          <input type="hidden" name="id" id="id" value="<?php echo $id; ?>"/>
                          <input type="submit" name="submit" id="submit" value="Enviar" />
                        </form>
		</div>						
			
		<div id="footer">
			<?php
                        if(isset($_GET['ref'])){
                            if($_GET['ref']==1){
                                echo "Comentario enviado de forma exitosa";
                            }else{
                                echo "Error en el envio del comentario";
                            }
                        }
                        ?>
                        </div>
	</div>
	<img id="bottom" src="IMG/bottom.png" alt="">
	</body>
</html>
<?php
}else{
	echo "Inicie sesion primero.";
}
?>