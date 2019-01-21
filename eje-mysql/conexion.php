<?php

	
$conexion = new mysqli('localhost','root','','prueba_datos');

//Si te aparece un CERO, la conexion es correcta// echo $conexion->connect_errno;
if ($conexion->connect_errno) {
    die('Existe un problema con el servidor');
}else{
    echo 'Todo esta OK';
}






/*Ejercicio5

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

*/


/*Ejercicio4

$conexion = new mysqli('localhost','root','','prueba_datos');
if ($conexion->connect_errno) {
    die('Existe un problema con el servidor');
}else{
	$sql= 'SELECT * FROM usuarios';
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


*/






/*Ejercicio3

$conexion = new mysqli('localhost','root','','prueba_datos');
if ($conexion->connect_errno) {
    die('Existe un problema con el servidor');
}else{
	$sql= 'SELECT * FROM usuarios';
	$resultado = $conexion->query($sql);
	
	if ($resultado->num_rows) {
		//fetch_assoc muestra 1 fila del resultado
		echo $resultado->fetch_assoc()['Nombre'];
	}else{
		echo "No hay datos";
	}
}

*/

/*Ejercicio2
//Metodo query($variable) permite pasar un argumento que sería la sentencia SQL
//Queremos que nuestra conexion ejecute el SQL que tenemos aquí

// num_rows te muestra el número de filas que nos devolvio nuestra conexión y consulta SQL


$conexion = new mysqli('localhost','root','','prueba_datos');
if ($conexion->connect_errno) {
    die('Existe un problema con el servidor');
}else{
	$sql= 'SELECT * FROM usuarios';
	$resultado = $conexion->query($sql);
	echo $resultado->num_rows;
}

*/


/*Ejercicio 1

$conexion = new mysqli('localhost','root','','prueba_datos');

//Si te aparece un CERO, la conexion es correcta// echo $conexion->connect_errno;
if ($conexion->connect_errno) {
    die('Existe un problema con el servidor');
}else{
    echo 'Todo esta OK';
}
*/

//1)Hacer una conexion a base de datos y que salga bien
//2)Hacer una conexión y una peticion de SQL que usando num_rows, te diga cuantas filas hay en tu tabla
//3)Traer el valor de nombre usando fetch_assoc
//4)Traer varios valores de la tabla usando con fetch_assoc y un ciclo
//5)Limita lo que muestra la consulta a 2 usuarios
?>
