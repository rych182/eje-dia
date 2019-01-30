<?php
//GRACIAS DIOS POR MOSTRARME LOS ERRORES

class ejemplo
{
	
	function __set($var1,$var2)
	{
		echo "Es valor de la variable 1 es: ".$var1 . " y el valor de la variable 2 es :" . $var2;
	}
}
$objeto1 = new ejemplo();
$objeto1->metodo = "forifai";
// TARDE 13MIN, practicarlo 1,2,3,4,5 para hacerlo 3 veces mas rápido

/*
Flexboxfroggy 
Ejercicios curso flexbox
checar curso Codigo facilito, 1(display), 2(poner imagen de fondo),3(positions), 4(header), 5(transition y animation) 
*/


























//Esto sirve para poner reglas indicando que "una variable no existe", "Esta propiedad no se puede utilizar"
// 







/*METODO SET
	public function __set($nombre, $valor)
	{
		echo "Nombre: $nombre y valor: $valor";
		//aquí estoy intentando asignarle a la propiedad 'edad' el valor del número 4
		//se pueden hacer infinidad de reglas que vamos a verificar que se estén ejecutandosu sistema
		//de manera correcta
	}
$objeto1 = new operacionesMatematicas("1");
$objeto1->edad=4;

*/



/*METODO MÁGICO GET


//Se imprimira primero $objeto1->edad
	public function __get($nombrePropiedad)
	{
		echo "Tu estás intentando extraer el valor de la propiedad 'edad', <br>
		debes utilizar el metodo llamada 'obtenerEdad'";
		//Esto se utiliza como metodo de sobre carga de propiedades, para decir que se puede o no hacer
		// y como hacerlo
	}

	$objeto1 = new operacionesMatematicas("1");
	echo "La edad es: " . $objeto1->edad;
*/



/*EJEMPLO metodo mágico CALL, sirve para escribir las reglas que yo quiero que mi clase tenga, para que
cuando un programador ejecute un metodo que no exista o no este a su alcance, lo puedas ejecutar

RESUMEN: usas un metodo que no existe, te lo inventas, y tiene que haber 2 pinshis argumentos dentro del parentesis del metodo mágico

class ejemplo
{	// nombre del argumento/lo que tiene dentro el argumento, esta es la estructura de este metodo mágico
	public function __call($var,$var2)
	{
		if ($var == "suma") {
			$resultado = 1+1;
			echo "El valor de la variable resultado es: $resultado";
		}
		
	}
}
$objeto = new ejemplo();
$objeto->resta();
//CALL se ejecuta en el instante en el que estamos llamando a un metodo que no existe
*/





/* DESTRUCTOR

class pinshiClase
{
	
	function __construct($var)
	{
		echo "Soy un constructor $var <br>";
	}
	public function __destruct()
	{
		echo "Aquí te mueres pinshi objeto<br>";
	}
}

$objeto = new pinshiClase("werever");
$objeto2 = new pinshiClase("el crew");
//$objeto2= null;
echo "Soy un codigo <br>";


*/


?>