<?php
include('conexion.php');
$codigo=$_POST['codigo'];
$contraseña=$_POST['contraseña'];



$consulta = "SELECT*FROM administrador where codigo = '$codigo' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:../base/menu");

}else{

	header("location: ../login?fallo=true");

}
mysqli_free_result($resultado);
mysqli_close($conexion);