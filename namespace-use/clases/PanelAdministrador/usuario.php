<?php

namespace PanelAdministrador;
class Usuario
{
	public $nombre;
	public $email;

	public function __construct()
	{
		$this->nombre = "Fulano Garrido";
		$this->email = "fulano@fulano.com";
	}
}