<?php namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model{
    public function listarDatos(){
        $usuarios = $this->db->query("Select * from usuarios");
        return $usuarios->getResult();
    }

    public function insertar($datos_usuario){
        $usuario = $this->db->table('usuarios');
        $usuario->insert($datos_usuario);

        return $this->db->insertID();
    }

    public function obtenerNombre($data){
        $usuario = $this->db->table('usuarios');
        $usuario->where($data);

        return $usuario->get()->getResult();
    }

    public function actualizar($data, $id_Usuario){
        $usuario = $this->db->table('usuarios');
        $usuarios->set($data);
        $usuarios->where('idUsuario', $id_Usuario);

        return $usuario->update();
    }
}