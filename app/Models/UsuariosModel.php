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
}