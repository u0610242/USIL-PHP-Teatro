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
	
		<h1><a>Registrese</a></h1>
		<form id="form_439493" class="appnitro"  method="post" action="../BL/Controladora.php">
					<div class="form_description">
			<h2>Formulario de Registro de Usuario</h2>
			<p><a href="../index.php">Regresar</a></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="nombre">Nombre </label>
		<div>
			<input id="nombre" name="nombre" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>Ingrese su nombre - campo obligatorio</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="apellido">Apellido </label>
		<div>
			<input id="apellido" name="apellido" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_2"><small>Ingrese sus dos apellidos - campo obligatorio</small></p> 
		</li>		<li id="li_3" >
		<label class="description" for="correo">Correo </label>
		<div>
			<input id="correo" name="correo" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_3"><small>Ingrese su correo electronico en el formato usuario@dominio.com</small></p> 
		</li>
                </li>		<li id="li_3" >
		<label class="description" for="correo">Contraseña </label>
		<div>
			<input id="correo" name="pass" class="element text medium" type="password" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_3"><small>Ingrese una nueva contraseña</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1" />
			    
				<input id="saveForm" class="button_text" type="submit" name="Enviar" value="Enviar" />
		</li>
			</ul>
		</form>	
                
		<div id="footer">
			<?php
                        if(isset($_GET['ref'])){
                            $referencia = $_GET['ref'];
                            if($referencia==1){
                                echo "Usuario Registrado Correctamente";
                            }else{
                                echo "Error al Registrar Usuario";
                            }
                        }
                        ?>
                        </div>
	</div>
	<img id="bottom" src="IMG/bottom.png" alt="">
	</body>
</html>