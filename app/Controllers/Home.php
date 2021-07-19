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
		$datos_usuario = [
			"nombre" => $_POST['nombre'],
			"apaterno" => $_POST['apaterno'],
			"amaterno" => $_POST['amaterno']
		];
		$id_Usuario = $_POST['idUsuario'];
		$datos = new UsuariosModel();
		print_r($datos_usuario);
/*
		$respuesta = $datos->actualizar($datos_usuario, $id_Usuario);
		
		if($respuesta){
			return redirect()->to(base_url().'/')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/')->with('mensaje','3');
		}
	*/	
	}

	public function obtenerNombre($idUsuario){
		$data = ["idUsuario" => $idUsuario];
		
		$model = new UsuariosModel();
		$respuesta = $model->obtenerNombre($data);
		//$datos_u = ["datos" => $respuesta];
//print_r($respuesta);
		return view('actualizar', $respuesta);
	}

	public function eliminar($idUsuario){}}
