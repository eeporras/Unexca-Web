<?php

include("con_db.php");

 if (strlen($_POST['usuario']) && 
     strlen($_POST['password']) ){
     $usuario =$_POST['usuario'];
	 $password =$_POST['password'];



$consulta="SELECT * FROM users WHERE usuario='$usuario' and password='$password' ";
$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
	header("location:loginusuario.html");
}
else{
	echo "Error en la Autentificación";
}
mysqli_free_result($resultado);
mysqli_close($conex);
}

?>