<?php
require_once 'autoload.php';
use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioPanelAdmin;

class Principal
{
	public $usuario;
	public $categoria;
	public $entrada;
	function __construct()
	{
		$this->usuario = new Usuario();
		$this->categoria = new Categoria();
		$this->entrada = new Entrada();
	}
}
$objeto1 = new PanelAdministrador\Usuario();
var_dump($objeto1);

echo "<br>";

$objeto = new Principal();
var_dump($objeto->usuario);

//Esto es para buscar si existe una clase.
$clase = class_exists('PanelAdministrador\Usuario');
if ($clase) {
	echo "<br>La clase SI existe";
}else{
	echo "<br>La clase NO existe";
}




/*

namespace: En su definición más aceptada, los espacios de nombres son una manera de encapsular elementos. Como ejemplo, el fichero foo.txt puede existir en los directorios /home/greg y /home/otro, pero no pueden coexistir dos copias de foo.txt en el mismo directorio. 

Mi explicación: vas a poner el nombre de la carpeta de tus archivos, carpeta\ , pero en vez del nombre de los archivos, pondrás el nombre de las clases, en los archivos donde estén esas clases usarás "namespace nombreDeLaClase;" y en el archivo index.php los usaras con "use carpeta\nombreClase;" y cuando lo instancies "$objeto = new carpeta\nombreClase();""
1)poner el nombre de la carpeta de tus archivos, namespace carpeta\clase; en los archivos donde se ubiquen esas clases
2)En el archivo index.php pondras "use carpeta\nombreClase;"
3)Cuando instancies para crear un objeto pondras "$objeto = new carpeta\nombreClase();"

$usuario = new Usuario();
echo $usuario->nombre;
echo "<br>";
echo $usuario->email;

$categoria = new Categoria();
echo "<br>".$categoria->nombre;
*/
?>