<DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/RegistroFormu.css">
<tittle></tittle>
</head>
<body>	
	<section>
		<form class="form-register" action="registrar.php" method="post">
		<center><h4>REGISTRO
		 SIU UNEXCA</h4></center>
		<h5>Datos Personales</h5>
		<input class="data" type="text" name="primer_nombre" id="primer_nombre" placeholder="Primer Nombre">
		<input class="data" type="text" name="segundo_nombre" id="segundo_nombre" placeholder="Segundo Nombre">
		<input class="data" type="text" name="primer_apellido" id="primer_apellido" placeholder="Primer Apellido">
		<input class="data" type="text" name="segundo_apellido" id="segundo_apellido" placeholder="Segundo Apellido">
		<h5>Fecha de nacimiento</h5>
		<input class="data" type="date" value="2000-01-01" min="1920-12-31" max="2012-12-31" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="F. nacimiento">
		<h5>C&eacutedula</h5>
		<input class="data" type="text" name="cedula" id="cedula" placeholder="Cedula">
		<h5>G&eacutenero</h5>
		<select class="data" name="genero">
		<option>Masculino</option>
		<option>Femenino</option>
		<option>Prefiero no Decirlo</option>
		</select>
		<h5>Correo electr&oacutenico</h5>
		<input class="data" type="email" name="correo" id="correo" placeholder="Correo">
		<h5>N&uacutemero de tel&eacutefono</h5>
		<input class="data" type="text" name="numero_telefonico1" id="numero_telefonico1" placeholder="Numero de telefono">
		<h5>Tel&eacutefono Local/N&uacutemero alternativo</h5>
		<input class="data" type="text" name="numero_telefonico2" id="numero_telefonico2" placeholder="Telefono Local">
		<h4>Datos de Direcci&oacuten</h4>
		<h5>Estado</h5>
		<select class="data" name="estado">
		<option>Distrito Capital</option>
		<option>Miranda</option>
		<option>Vargas</option>
		<option>Aragua</option>
		</select>
		<h5>Ciudad</h5>
		<select class="data" name="ciudad">
		<option>Caracas</option>
		<option>Los Teques</option>
		<option>La Guaira</option>
		<option>Maracay</option>
		</select>
		<h5>Municipio</h5>
		<input class="data" type="text" name="municipio" id="municipio" placeholder="Municipio">
		<h5>Parroquia</h5>
		<input class="data" type="text" name="parroquia" id="parroquia" placeholder="Parroquia">
		<h5>Avenida/Calle</h5>
		<input class="data" type="text" name="avenida" id="avenida" placeholder="Avenida/Calle">
		<h5>Edif/Casa</h5>
		<input class="data" type="text" name="casa" id="casa" placeholder="Edif/Casa">
		<h5>N&uacutemero de Apart/Casa</h5>
		<input class="data" type="text" name="apartamento" id="apartamento" placeholder="Numero de Apart/Casa">
		<h5>Turno</h5>
		<select class="data" name="turno">
		<option>Diurno</option>
		<option>Vesperino</option>
		<option>Nocturno</option>
		</select>
		<h5>Carrera</h5>
		<select class="data" name="carrera">
		<option>PNF Inform&aacutetica</option>
		<option>PNF Administraci&oacuten</option>
		<option>PNF Contadur&iacutea</option>
		</select>
		<h5>Plan de Estudio</h5>
		<select class="data" name="plan_estudio">
		<option>TSU (T&eacutecnico Superior Universitario)</option>
		<option>Ingenier&iacutea</option>
		<option>Licenciatura</option>
		</select>
		<h5>Trayecto</h5>
		<select class="data" name="trayecto">
		<option>I</option>
		<option>II</option>
		<option>III</option>
		<option>IV</option>
		</select>
		<h5>Semestre</h5>
		<select class="data" name="semestre">
		<option>I</option>
		<option>II</option>
		</select>
		<input class="bottom" type="submit" name="register">
		</form>
	</section>		
		<?php
		        ?>

</body>

</html>