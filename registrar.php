<?php

include("con_db.php");

	if (isset($_POST['register'])) {
    if (strlen($_POST['primer_nombre']) >= 1 &&
    	strlen($_POST['segundo_nombre']) >= 1 &&
    	strlen($_POST['primer_apellido']) >= 1 &&
		strlen($_POST['segundo_apellido']) >= 1 &&
		strlen($_POST['fecha_nacimiento']) >= 1 &&
		strlen($_POST['cedula']) >= 1 &&
		strlen($_POST['genero']) >= 1 &&
		strlen($_POST['correo']) >= 1 &&
		strlen($_POST['numero_telefonico1']) >= 1 &&
		strlen($_POST['numero_telefonico2']) >= 1 &&
		strlen($_POST['estado']) >= 1 &&
		strlen($_POST['ciudad']) >= 1 &&
		strlen($_POST['municipio']) >= 1 &&
		strlen($_POST['parroquia']) >= 1 &&
		strlen($_POST['avenida']) >= 1 &&
		strlen($_POST['casa']) >= 1 &&
		strlen($_POST['apartamento']) >= 1 &&
		strlen($_POST['turno']) >= 1 &&
		strlen($_POST['carrera']) >= 1 &&
		strlen($_POST['plan_estudio']) >= 1 &&
		strlen($_POST['trayecto']) >= 1 &&
		strlen($_POST['semestre']) >= 1 ){
	    $primer_nombre = trim($_POST['primer_nombre']);
	 	$segundo_nombre = trim($_POST['segundo_nombre']);
	 	$primer_apellido = trim($_POST['primer_apellido']);
	    $segundo_apellido = trim($_POST['segundo_apellido']);
		$fecha_nacimiento = trim($_POST['fecha_nacimiento']);
		$cedula = trim($_POST['cedula']);
		$genero = trim($_POST['genero']);
		$correo = trim($_POST['correo']);
		$numero_telefonico1 = trim($_POST['numero_telefonico1']);
		$numero_telefonico2 = trim($_POST['numero_telefonico2']);
		$estado = trim($_POST['estado']);
		$ciudad = trim($_POST['ciudad']);
		$municipio = trim($_POST['municipio']);
		$parroquia = trim($_POST['parroquia']);
		$avenida = trim($_POST['avenida']);
		$casa = trim($_POST['casa']);
		$apartamento = trim($_POST['apartamento']);
		$turno = trim($_POST['turno']);
		$carrera = trim($_POST['carrera']);
		$plan_estudio = trim($_POST['plan_estudio']);
		$trayecto = trim($_POST['trayecto']);
		$semestre = trim($_POST['semestre']);
	    $fecha_inscripcion = date("d/m/y");
	    ////////////////////////////////////////////////////////////////////////////////////////////////
        $registro_alumnos = "INSERT INTO alumnos (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento, cedula, genero, correo, numero_telefonico1, numero_telefonico2)
VALUES ('$primer_nombre','$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$fecha_nacimiento', '$cedula', '$genero', '$correo', '$numero_telefonico1', '$numero_telefonico2')";
$resultado = mysqli_query($conex,$registro_alumnos);
echo "hola registro el primero";
///////////////////////////////////////////////////////////////////////////////////////////////////////////
$registro_dire = "INSERT INTO direccion(estado, ciudad, municipio, parroquia, avenida, apartamento, casa,id_usuario)
VALUES ('$estado','$ciudad', '$municipio', '$parroquia', '$avenida', '$apartamento', '$casa',(SELECT id_usuario FROM alumnos ORDER BY id_usuario DESC LIMIT 1))";
$resultado = mysqli_query($conex,$registro_dire);
///echo "hola registro el segundo";
////////////////////////////////////////////////////////////////////////////////////////////////////////
$registro_est = "INSERT INTO estudio(carrera, turno, plan_estudio, trayecto, semestre, id_usuario)
VALUES ('$carrera','$turno', '$plan_estudio', '$trayecto', '$semestre',(SELECT id_usuario FROM alumnos ORDER BY id_usuario DESC LIMIT 1))";  
$resultado = mysqli_query($conex,$registro_est);
echo "hola registro el tercero";	    
if ($resultado) {
	    	?> 
	    	<h3 class="ok">�Te has inscripto correctamente!</h3>
           <?php
           header("location:exitofor.html");
	    } else {
	    	?> 
	    	<h3 class="bad">�Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">�Por favor complete los campos!</h3>
           <?php
    }
}


?>