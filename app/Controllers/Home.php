<?php namespace App\Controllers;

use App\Models\UsuariosModel;

class Home extends BaseController{
	public function index(){

		$mensaje = session('mensaje');

		$datos = new UsuariosModel();
		$lista = $datos->listarDatos();

		$data = [ "datos" => $lista,
			"mensaje" => $mensaje
		]; 

		return view('welcome_message', $data);
	}

	public function crear(){
		//print_r($_POST);
		$datos_usuario = [
			"nombre" => $_POST['nombre'],
			"apaterno" => $_POST['apaterno'],
			"amaterno" => $_POST['amaterno']
		];

		$datos = new UsuariosModel();
		$respuesta = $datos->insertar($datos_usuario);

		if($respuesta > 0){
			return redirect()->to(base_url().'/')->with('mensaje','1');	//Redirecciona a index
		}else{
			return redirect()->to(base_url().'/')->with('mensaje','0');
		}

	}

	public function actualizar(){
		return view('actualizar');
	}

	public function obtenerNombre($idUsuario){}

	public function eliminar($idUsuario){}

}
