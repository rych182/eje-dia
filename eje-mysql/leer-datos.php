<?php

//Metodo query($variable) permite pasar un argumento que sería la sentencia SQL
//Queremos que nuestra conexion ejecute el SQL que tenemos aquí

// num_rows te muestra el número de filas que nos devolvio nuestra conexión y consulta SQL
//fetch_assoc obtiene una fila de resultado con un array asociativo

$conexion = new mysqli('localhost','root','','prueba_datos');
if ($conexion->connect_errno) {
    die('Existe un problema con el servidor');
}else{
	$sql= 'SELECT * FROM usuarios LIMIT 2';
	$resultado = $conexion->query($sql);
	
	if ($resultado->num_rows) {
		//fetch_assoc muestra 1 fila del resultado
		
		while ($fila = $resultado->fetch_assoc()) {//si hay resultado de filas, las guardamos en la variable $fila y ejecutamos el codigo
			echo $fila['ID'] . ' - ' . $fila['Nombre'] . ' - ' . $fila['Edad'] . ' - ' . $fila['pais'] . "<br>";
		}
	}else{
		echo "No hay datos";
	}
}




































?>