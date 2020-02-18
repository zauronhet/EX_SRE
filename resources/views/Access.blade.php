 

 <!doctype html>
 	<html lang="es">
 		<head>
 			<meta charset="UTF-8">
 				<title>PAGINA DE ACCESO</title>
 		</head>
 		<body>
 			<button onclick="location.href='{{ url('/LogIn')}}'" type="button">
        		Iniciar Sesión
 			</button>

 			<button onclick="location.href='{{url('/Create')}}'" type="button">
        		Crear Usuario
 			</button>

 			<button onclick="location.href='{{url('/index')}}'" type="button">
        		Usuarios
 			</button>

 		</body>
 	</html>
