<?php

namespace MisClases;
class Usuario
{
	public $nombre;
	public $email;

	public function __construct()
	{
		$this->nombre = "Ricardo Garrido";
		$this->email = "ric@ric.com";
	}
}