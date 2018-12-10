<?php

class ejemplo
{
	public function nombres($var)
	{
		echo $var;
	}
	public function titulo1()
	{
		echo "<h1>";
	}
	public function titulo2()
	{
		echo "</h1>";
	}
	public function parrafo1()
	{
		echo "<p>";
	}
	public function parrafo2()
	{
		echo "</p>";
	}
}

$objeto1 = new ejemplo();
$objeto2 = new ejemplo();
$objeto3 = new ejemplo();
$objeto4 = new ejemplo();
$objeto5 = new ejemplo();


$objeto1->titulo1();
$objeto1->nombres("Mengano<br>");
$objeto1->titulo2();

$objeto1->parrafo1();
$objeto2->nombres("Perengano<br>");
$objeto1->parrafo2();

$objeto1->titulo1();
$objeto3->nombres("Sutano<br>");
$objeto1->titulo2();

$objeto1->parrafo1();
$objeto4->nombres("Menganita<br>");
$objeto1->parrafo2();

$objeto1->titulo1();
$objeto5->nombres("Diblain Teleforo<br>");
$objeto1->titulo2();




































/*
class html
{
	public function head($variable)
	{
		echo "<html><head>";
		echo "<title>$variable</title>";
		echo "</head>";
	}

	public function AbrirBody()
	{
		echo "<body>";
	}

	public function CerrarBody()
	{
		echo "</body>";
	}

	public function pie()
	{
		echo "</html>";
	}
}


class MiClase 
{
	private $nombre = "";
	public function cambiar($variable)
	{
		$this->nombre = $variable;
	}
	public function modificar()
	{
		echo "Mi nombre es: " . $this->nombre;
	}
}

$objeto0 = new html();
$objeto0->head("Titulo vergas");
$objeto0->AbrirBody();

$objeto = new MiClase();
$objeto->cambiar("Veronica Xareli Dominguez, y estoy bien tetona<br>");
$objeto->modificar();

$objeto2 = new MiClase();
$objeto2->cambiar("Helena, tengo unas nalgotas blancas lechosas bien ricas<br>");
$objeto2->modificar();

$objeto3 = new MiClase();
$objeto3->cambiar("Tania, y son una gordisabrosa<br>");
$objeto3->modificar();

$objeto4 = new MiClase();
$objeto4->cambiar("Fernanda, una teen que se le debió un cogidon<br>");
$objeto4->modificar();

$objeto5 = new MiClase();
$objeto5->cambiar("América, una milf sabrosa<br>");
$objeto5->modificar();

$objeto0->CerrarBody();
$objeto0->pie();

*/















/*class MiClase
{
	private $nombre = "";
	public function __construct()
	{
		//echo "Mi nombre es ";
	}
	public function cambiar()
	{
		$this->nombre = "El choco";
	}
	public function mostrar()
	{
		echo "Me dicen " . $this->nombre;
	}
}

$miObjeto = new MiClase();
$miObjeto->cambiar();
$miObjeto->mostrar();
*/


/* ======objeto modificado desde afuera===========
class perro
{
	public $nombre = "";
	public function metodo()
	{
	 echo $this->nombre;
	}
}

$objeto = new perro();
$objeto->nombre = "soy una oracion";
$objeto->metodo();



*/

//**********COSAS POR PRACTICAS******************
//1)Objeto con constructor y metele un valor con una variable LISTO
//2)PROPIEDAD modificada desde afuera del objeto LISTO
//3)Cambiando mi apodo cuando está protegido LISTO
//4)Imprimiendo un objeto con 2 métodos públicos, uno inserta un valor a una PROPIEDAD PRIVADA, uno declara y el otro muestra. LISTO 
//5)Cambiar PROPIEDAD PRIVADA desde afuera con una variable dentro de los parentesis del metodo LISTO
//6)Hacer 5 objetos con una misma clase, y que cada objeto me muestr un nombre distinto LISTO
//7)Crear un objeto con una clase que dentro tenga metodos con etiquetas html y modifiques un segundo objeto que imprima cualquier cosa. LISTO      

//TARDE 21MIN, esto es el máximo
















