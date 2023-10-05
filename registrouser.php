<?php
$servername = "localhost";
$database = "unexca";
$username = "root";
$password = "";
// CREAR LA CONEXION
$conex = mysqli_connect($servername, $username, $password, $database);
// Check CONEXION
if (!$conex) {
      die("Fallo en la conexion: " . mysqli_connect_error());
}
 
echo "Incrito Correctamente<br>";


    
    if (strlen($_POST['usuario']) >= 1 && 
        strlen($_POST['password']) >= 1 ){
        $usuario = trim($_POST['usuario']);
        $password = trim($_POST['password']);
$sql = "INSERT INTO users (usuario, password) VALUES ('$usuario','$password')";
     
          $resultado = mysqli_multi_query($conex,$sql);                                 
          
          if ($resultado) {
          
            ?> 
            <h3 class="ok">¡Tu Usuario Se Guardo Con Exito!</h3>
          
           <?php   
            header("location:exitouser.html");
          } else {
            ?> 
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
          

      }

   }


?>