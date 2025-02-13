<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    // Obtener todos los usuarios
    public function getAll() {
        $query = $this->db->get('usuario');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar un nuevo usuario
    public function insert($data) {
        return $this->db->insert('usuario', $data);
    }

    // Actualizar un usuario por ID
    public function update($id, $data) {
        $this->db->where('codigo_usu', $id);
        return $this->db->update('usuario', $data);
    }

    // Obtener un usuario por ID
    public function getById($id) {
        $this->db->where('codigo_usu', $id);
        $query = $this->db->get('usuario');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar un usuario por ID
    public function delete($id) {
        $this->db->where('codigo_usu', $id);
        return $this->db->delete('usuario');
    }

    // Obtener usuarios por estado (activo o inactivo)
    public function getByEstado($estado) {
        $this->db->where('estado_usu', $estado);
        $query = $this->db->get('usuario');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Buscar usuario por username
    public function getByUsername($username) {
        $this->db->where('username_usu', $username);
        $query = $this->db->get('usuario');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Validar usuario por username y password
    public function validateUser($username, $password) {
        $this->db->where('username_usu', $username);
        $this->db->where('password_usu', $password); // Se recomienda encriptar la contraseña
        $query = $this->db->get('usuario');
        return $query->num_rows() > 0 ? $query->row() : false;
    }
}
?>
