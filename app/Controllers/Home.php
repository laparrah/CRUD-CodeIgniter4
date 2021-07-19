<?php namespace App\Controllers;

use App\Models\UsuariosModel;

class Home extends BaseController{
	public function index(){

		$datos = new UsuariosModel();
		$lista = $datos->listarDatos();

		$data = [ "datos" => $lista ]; 
		return view('welcome_message', $data);
	}

	public function crear(){}

	public function actualizar(){
		return view('actualizar');
	}

	public function obtenerNombre($idUsuario){}

	public function eliminar($idUsuario){}

}
