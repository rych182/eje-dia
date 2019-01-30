<?php
echo 'Hello World';
?>





/*Ejercicio 10

class Usuario
{
    public $nombre;
    public $correo;

    function __construct($nombre,$correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarNombre(){
        echo 'Su nombre es: '. $this->nombre . '<br>';
        return $this;
    }
    public function mostrarCorreo()
    {
        echo 'Su correo es: ' .$this->correo . '<br>';
        return $this;
    }
}

$carlos = new Usuario('Carlos', 'carlos@gmail.com');
$carlos->mostrarNombre()->mostrarCorreo();

*/






/*Ejercicio 9

class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }
    public function mostrarInformacion()
    {
        return$this->nombre . ' tiene '. $this->edad . 'años de edad y es de '. $this->pais;
    }
}

class Estudiante extends Persona {
    function __construct($nombre, $edad, $pais,$carrera)
    {
        parent::__construct($nombre, $edad, $pais);
        $this->carrera = $carreta;
    }
} 

class Trabajador extends Persona 
{
    function __construct($nombre, $edad, $pais,$trabajo)
    {
        parent::__construct($nombre, $edad, $pais);
        $this->trabajo= $trabajo;
    }
}
    
$carlos = new Trabajador('ric',31,"Mex","Dev");
echo $carlos->trabajo;
*/








/*	Ejercicio8

class Persona 
{
    public $nombre;
    public $edad;
    public $pais;

    public function __construct($nombre,$edad,$pais)
    {
        echo $this->nombre=$nombre;
        echo $this->edad=$edad;
        echo $this->pais=$pais;
    }
}
$objeto = new Persona("ric",24,"mex");

*/







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
//8)Crear un Constructor que modifique 3 propiedades publicas, las imprima y los valores se los pases desde afuera LISTO
//9)Crear 3 clases, la clase no.2y3 heredaran la no.1, enla clase no.1 habrá 3 propiedades publicas y un constructor que "modificara las propiedades",
//y un metodo con return que regresará una cadena de texto con los datos, en la clase no.2y3 tendran constructores que dentro de ellos usaran PARENT
//para "heredar el constructor", de la clase 1, pero la clase 2 y 3 le agregaran un cuarto valor, abajito de donde heredan con PARENT, usaran un $this para
//ese cuarto valor LISTO
//10)Hacer una clase con 2 propiedades públicas, 2 metodods públicos y un constructor, el constructor modificara las propiedades públicas, que se usaran en los metodos
//publicos y retornaras su valor usando return,pero usarás METODOS CADENA COMO EN LOS FRAMEWORKS, usando "returno $this" LISTO
//11) Usar una clase abstracta, para usarla, ahuevo tienes que heredar y a la primer clase le pones abstract y ya esta. LISTO



















