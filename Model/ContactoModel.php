<?php

/**
 * Modelo Contacto.
 *
 */
class ContactoModel
{
	/**
	 * Constructor
	 */
	function __construct($nombre, $apellidos, $telefono, $direccion, $trabajotel, $trabajodir, $correo)
	{
		$this->nombre = $nombre;
		$this->apellidos = $apellidos;
		$this->telefono = $telefono;
		$this->direccion = $direccion;
		$this->trabajotel = $trabajotel;
		$this->trabajodir = $trabajodir;
		$this->correo = $correo;
	}

	function serialice(){
		return $this->nombre.':'.$this->apellidos.':'.$this->telefono.':'.$this->direccion.':'.$this->trabajotel.':'.$this->trabajodir.':'.$this->correo;
	}
}
