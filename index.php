<!DOCTYPE html>
<html>
<head>
	<title>index de imagenes</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body> 	
<center>
	<div class="box"><br>
	<form action="validar.php" method="POST" enctype="multipart/form-data">
		<h1>LOGIN ADMINISTRADOR</h1><br>
		<label>Codigo:</label>
		<input type="int" REQUIRED name="codigo" placeholder="Codigo...." value=""/><br/><br/>
		<label>Contraseña:</label>
		<input type="password" REQUIRED name="contraseña" placeholder="Contraseña...." value=""/><br/><br/>
		<?php
       if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
       {
          echo "<div style='color:red' >Usuario o contraseña invalido </div>";
       }
     ?>
		<button type="submit"> Iniciar sesion </button>
	</form>	
    </div>

</center>
</body>
</html>