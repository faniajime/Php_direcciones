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
				$mensaje =  'Se creó el contacto exitosamente';
			}
			else
			{
				$mensaje = 'No se pudo guardar el contacto';
			}
			header('Location:index.php?action=index&mensaje='.urldecode($mensaje));
		}

	}

	function edite(){
		if(count($_POST)==0){
			$correo = $_GET['id'];
			$direcciones = new DireccionesModel();
			$direccion = $direcciones->busque($correo);
			$this->view->assign('direccion', $direccion);
			
		}else{
			$direcciones = new DireccionesModel();
			$contacto = new ContactoModel($_POST['nombre'], $_POST['apellidos'], $_POST['telefono'],$_POST['direccion'],$_POST['trabajotel'],$_POST['trabajodir'], $_POST['correo']);
			if ($direcciones->actualice($contacto))
			{
				$mensaje =  'Se ha actualizado el contacto exitosamente.';
			}
			else
			{
				$mensaje = 'No se pudo actualizar contacto.';
			}
			header('Location:index.php?action=index&mensaje='.urldecode($mensaje));
		}
	}
	
	function borre(){
		$this->autoRender = false;
		$correo = $_GET['id'];
		$direcciones = new DireccionesModel();
		if ($direcciones->borre($correo))
		{
			$mensaje =  'Se ha borrado el contacto exitosamente';
		}
		else
		{
			$mensaje = 'No se pudo borrar el contacto';
		}
		header('Location:index.php?action=index&mensaje='.urldecode($mensaje));
	}
}
