<?php

/**
 * Modelo Direcciones.  Direcciones.
 *
 */
class DireccionesModel
{
	function liste()
	{
		$json = file_get_contents('direcciones.txt');
		return json_decode($json);
	}

	function grabe(ContactoModel $contacto)
	{
		$json = file_get_contents('direcciones.txt');
		$direcciones = json_decode($json);
		array_push($direcciones, $contacto);
		return file_put_contents('direcciones.txt', json_encode($direcciones)); 
	}

	function busque($correo)
	{
		$json = file_get_contents('direcciones.txt');
		$direcciones = json_decode($json);
		$found = false;  
		foreach($direcciones as $key => $value) {
    		if ($value->correo == $correo) {
				$found = true;
				break;
			}
		}
		return $direcciones[$key];
	}

	function actualice(ContactoModel $contacto){
		$json = file_get_contents('direcciones.txt');
		$direcciones = json_decode($json);
		$found = false;  
		foreach($direcciones as $key => $value) {
    		if ($value->correo == $contacto->correo) {
				$found = true;
				break;
			}
		}
		if ($found) $direcciones[$key] = $contacto;
		file_put_contents('direcciones.txt', json_encode($direcciones)); 
		return true;
	}

	function borre( $correo){
		$json = file_get_contents('direcciones.txt');
		$direcciones = json_decode($json);
		$found = false;  
		foreach($direcciones as $key => $value) {
    		if ($value->correo == $correo) {
				$found = true;
				break;
			}
		}
        if ($found) unset($direcciones[$key]);
		file_put_contents('direcciones.txt', json_encode($direcciones)); 
		return true;
	}
}
