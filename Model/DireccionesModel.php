<?php

/**
 * Modelo Direcciones.  Direcciones.
 *
 */
class DireccionesModel
{
	function liste()
	{
		$this->dirs = array();
		$archivo = fopen('direcciones.txt', 'r');
		while($registro = fgets($archivo))
		{
			$contacto = explode(':', $registro);
			$this->dirs[] = new ContactoModel($contacto[0], $contacto[1], $contacto[2],$contacto[3],$contacto[4],$contacto[5],$contacto[6]);
		} // while
		fclose($archivo);
		return $this->dirs;
	}

	function grabe(ContactoModel $contacto)
	{
		$archivo = fopen('direcciones.txt', 'a+');
		if (fwrite($archivo, $contacto->serialice()."\n"))
		{
			fclose($archivo);
			return true;
		}
		else
		{
			fclose($archivo);
			return false;
		}
	}
}
