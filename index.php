<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Iniciar Sesion</title>
<link rel="stylesheet" type="text/css" href="PL/Styles/view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
<?php
if(isset($_SESSION['user'])){
	header('location:PL/Main.php');
}
?>
	
	<img id="top" src="PL/IMG/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Iniciar Sesion</a></h1>
		<form id="form_439940" class="appnitro"  method="post" action="BL/Controladora.php">
					<div class="form_description">
			<h2>Iniciar Sesion</h2>
			<p>Necesita iniciar sesion para ver las obras.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="user">Correo </label>
		<div>
			<input id="user" name="user" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>Ingrese su usuario
</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="pass">Contraseña </label>
		<div>
			<input id="pass" name="pass" class="element text medium" type="password" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input name="formRico" type="hidden" id="formRico" value="1" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Enviar" />
		</li>
			</ul>
		</form>	
                <blockquote>
                  <p><a href="PL/form.php">Registrate</a>
                  </p>
                </blockquote>
        <div id="footer">
			<?php
                        if(isset($_GET['ref'])){
                            echo "Error en usuario o contraseña";
                        }
                        ?>
		</div>
	</div>
	<img id="bottom" src="PL/IMG/bottom.png"  alt="">
	</body>
    </html>