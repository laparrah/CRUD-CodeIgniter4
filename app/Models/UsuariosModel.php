<?php namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model{
    public function listarDatos(){
        $usuarios = $this->db->query("Select * from usuarios");
        return $usuarios->getResult();
    }
}