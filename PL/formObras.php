<?php
session_start();
if(isset($_SESSION['user'])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Registrese</title>
<link rel="stylesheet" type="text/css" href="Styles/view.css" media="all">
<script type="text/javascript" src="Styles/view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="IMG/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Formulario de Registro de Obras</a></h1>
		<form id="form_439493" class="appnitro" enctype="multipart/form-data" method="post" action="../BL/Controladora.php">
					<div class="form_description">
			<h2>Formulario de Registro de Obras</h2>
			<p><a href="Main.php">Regresar</a></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="nombre">Nombre de la Obra </label>
		<div>
			<input id="nombre" name="nombre" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>Ingrese el nombre de la obra</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="autor">Autor de la Obra </label>
		<div>
			<input id="autor" name="autor" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_2"><small>Ingrese el autor de la obra</small></p> 
		</li>		<li id="li_3" >
		<label class="description" for="director">Director de la Obra
 </label>
		<div>
			<input id="director" name="director" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_3"><small>Ingrese el director de la obra
</small></p> 
		</li>		<li id="li_4" >
		<label class="description" for="sala">Sala </label>
		<div>
			<input id="sala" name="sala" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_4"><small>Ingrese la sala en la cual se realizara la obra</small></p> 
		</li>		<li id="li_5" >
		<label class="description" for="horarios">Horarios </label>
		<div>
			<input id="horarios" name="horarios" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_5"><small>Escriba los horarios separados por ( - ) guiones</small></p> 
		</li>		<li id="li_6" >
		<label class="description" for="precio">Precio </label>
		<div>
			<input id="precio" name="precio" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_6"><small>Escriba el precio de la obra (solo se aceptan numeros)</small></p> 
		</li>		<li id="li_7" >
		<label class="description" for="temporada">Temporada </label>
		<div>
			<input id="temporada" name="temporada" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_7"><small>Escriba las temporadas</small></p> 
		</li>		<li id="li_8" >
		<label class="description" for="afiche">Afiche </label>
		<div>
			<input id="afiche" name="afiche" class="element file" type="file"/> 
		</div> <p class="guidelines" id="guide_8"><small>Suba el afiche en formato imagen</small></p> 
		</li>		<li id="li_9" >
		<label class="description" for="resena">Reseña </label>
		<div>
			<textarea id="resena" name="resena" class="element textarea medium"></textarea> 
		</div><p class="guidelines" id="guide_9"><small>Escriba una breve reseña sobre la Obra</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="formObras_id" value="1" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Enviar" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			<?php
                        if(isset($_GET['ref'])){
                            $referencia = $_GET['ref'];
                            if($referencia==1){
                                echo "Obra Registrada Correctamente";
                            }else{
                                echo "Error al Registrar Obra";
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