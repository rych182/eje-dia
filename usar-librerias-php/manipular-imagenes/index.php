<?php

//Checa los metodos que tiene la librería en la documentación
require_once '../vendor/autoload.php';

$foto = 'juan-pis.jpg';
$guardar = 'foto-modificada.jpg';

$thumb = new PHPThumb\GD($foto);
//$thumb->resize(950,550); Cambia tamaño de la foto
//$thumb->crop(1200,300,300,300); Corta, le indicas ancho, alto y el ancho y alto del corte, asi sabras si es cuadrado o rectangular
$thumb->cropFromCenter(800);
$thumb->show();
$thumb->save($guardar);
