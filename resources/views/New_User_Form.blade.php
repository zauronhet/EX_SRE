 <!doctype html>
 	<html lang="es">
 		<head>
 			<meta charset="UTF-8">
 				<title>Creación de Cuenta</title>
 		</head>
 		<body>

 		<br>
		<form method="POST" action="{{route ('user.Insert')}}">
   			@csrf
        	<label for="nombre">Nombre</label><br>
          	<input type="text" name="nombre" id="nombre" placeholder="Escribe tu Nombre" required><br><br>

          	<label for="apellido_paterno">Apellido Paterno</label><br>
          	<input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Escribe tu apellido Paterno" required><br><br>

          	<label for="apellido_materno">Apellido Materno</label><br>
         	<input type="text" name="apellido_materno" id="apellido_materno" placeholder="Escribe tu Apellido Materno" required><br><br>

          	<label for="direccion_institucional">Dirección Institucional</label><br>
          	<input type="text" name="direccion_institucional" id="direccion_institucional" placeholder="Escribe tu Dirección Institucional" required><br><br>

          	<label for="password">Contraseña (8 caracteres mínimo)</label><br>
          	<input type="password" name="password" id="password" placeholder="Escribe tu Contraseña" pattern=".{8,}" required><br><br>

          	<label for="password2">Repita su Contraseña</label><br>
          	<input type="password" name="password2" id="password2" placeholder="Reescribe tu Contraseña" required><br><br>

         	<label for="email">Email</label><br>
          	<input type="email" name="email" id="email" placeholder="Escribe tu email" required><br><br>

          	<input type="submit" value="Submit">
</html>