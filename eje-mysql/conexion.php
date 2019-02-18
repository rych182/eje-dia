<?php
//Metodo query($variable) permite pasar un argumento que sería la sentencia SQL
//Queremos que nuestra conexion ejecute el SQL que tenemos aquí

// num_rows te muestra el número de filas que nos devolvio nuestra conexión y consulta SQL
//->execute(); ejecuta el codigo
//fetch_assoc muestra 1 fila del resultado// echo $resultado->fetch_assoc()['Nombre'];

$conexion = new mysqli('localhost','root','','prueba_datos');
if ($conexion->connect_errno) {
	die("La conexión ha fallado");
} else {
	$sql = "INSERT INTO usuarios(ID,Nombre,Edad,pais) VALUES(null,'Rafael',50,'Mexico')";
	$resultado = $conexion->query($sql);
	echo "Se inserto un nombre";
}














/*Ejercicio 7 Prepared Statement

$conexion = new mysqli('localhost','root','','prueba_datos');
if ($conexion->connect_errno) {
	die('No se pudo conectar el servidor');
}else{
	$statement = $conexion->prepare("INSERT INTO usuarios(ID,Nombre,Edad,pais) VALUES(?,?,?,?)");
	//s =string , i = integer , d =double
	$statement->bind_param('ssis',$id,$nombre,$edad,$pais); 
	$id = NULL;

	if (isset($_GET['Nombre']) && isset($_GET['Edad']) && isset($_GET['pais'])) {
		$nombre =$_GET['Nombre'];
		$edad =$_GET['Edad'];
		$pais =$_GET['pais'];
	}
	$statement->execute();


	if ($conexion->affected_rows >=1) {
		echo "Filas agregadas: " . $conexion->affected_rows;
	}else{
		echo "No se agrego nada";
	}
}
URL = http://localhost/eje-dia/eje-mysql/conexion.php?Nombre=ricardo&Edad=19&pais=mexico

*/









/*Ejercicio 6 Insertar datos en la base de datos

$conexion = new mysqli('localhost','root','','prueba_datos');
if ($conexion->connect_errno) {
	die("La conexión fallo");
} else {
	$sql = 'INSERT INTO usuarios(ID,Nombre,Edad,pais) VALUES(null,"Guendolain",29,"Civac")';
	$conexion->query($sql);
	echo "Se agrego un nuevo usuario";
}

OTRA MANERADE HACER EL PROGRAMA

$conexion = new mysqli('localhost','root','','prueba_datos');

$sql = "INSERT INTO usuarios (ID,Nombre, Edad, pais) VALUES (null, 'Maria', 30,'Mexico')";
if (mysqli_query($conexion, $sql)) {
      echo "Se ha agregado un nuevo usuario";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conexion);


*/


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

//1)Hacer una conexion a base de datos y que salga bien  LISTO
//2)Hacer una conexión y una peticion de SQL que usando num_rows, te diga cuantas filas hay en tu tabla LISTO
//3)MOSTRAR un valor de un nombre usando fetch_assoc LISTO
//4)Traer varios valores de la tabla usando con fetch_assoc y un ciclo LISTO
//5)Limita lo que muestra la consulta a 2 usuarios LISTO
//6)Insertar datos en la base de datos 
//7)Haz un prepared statement

//4:38pm - 4:45pm = 7min
?>
