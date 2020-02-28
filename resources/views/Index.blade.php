
 <!doctype html>
 	<html lang="es">
 		<head>
 			<meta charset="UTF-8">
 				<title>PAGINA DE VIZUALISACIÓN DE DATOS</title>
 		</head>
 		<body>
 			<button onclick="location.href='{{ url('/Examenes')}}'" type="button">
                Examenes
 			</button>

 			<button onclick="location.href='{{url('/Intento_de_Examenes')}}'" type="button">
                Intentos_de_Examenes
 			</button>

 			<button onclick="location.href='{{url('/Opciones_Preguntas_de_Examenes')}}'" type="button">
                Opciones_Preguntas_de_Examenes
 			</button>

             <button onclick="location.href='{{ url('/Preguntas_de_Examenes')}}'" type="button">
                Preguntas_de_Examenes
 			</button>

             <button onclick="location.href='{{ url('/Respuestas_por_Usuarios')}}'" type="button">
                Respuestas_por_Usuarios
 			</button>

             <button onclick="location.href='{{ url('/Usuarios')}}'" type="button">
                Usuarios
 			</button>

 		</body>
 	</html>
