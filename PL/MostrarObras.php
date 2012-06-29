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
			<h2>Listado de Obras</h2>
            <p><a href="Main.php">Regresar </a></p>
            <p>&nbsp;</p>
            <?php
                            require_once '../BL/Controladora.php';
                            $control = new Controladora();
                            $string = $control->MostrarObras();
                            
                            echo $string;
                        ?>
			
		</div>						
			
		<div id="footer">
			
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