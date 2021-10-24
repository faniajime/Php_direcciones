<?php

/*
 * Controlador de direcciones
 *
 */
class DireccionesController extends Controller {
	function index()
	{
		$direcciones = new DireccionesModel();
		$this->view->assign('direcciones', $direcciones->liste());
	}

	function cree()
	{
		if(count($_POST)!=0){
			$direcciones = new DireccionesModel();
			$contacto = new ContactoModel($_POST['nombre'], $_POST['apellidos'], $_POST['telefono'],$_POST['direccion'],$_POST['trabajotel'],$_POST['trabajodir'], $_POST['correo']);
			if ($direcciones->grabe($contacto))
			{
				$this->view->assign('mensaje', 'Su comentario ha sido recibido satisfactoriamente.');
			}
			else
			{
				$this->view->assign('mensaje', 'Su comentario no se pudo guardar.');
			}
			header('Location:index.php?action=index');
		}

	}

	function edite(){

	}
	
	function borre(){

	}
}
