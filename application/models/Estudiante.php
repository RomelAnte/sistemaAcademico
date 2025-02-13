<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todos los estudiantes
    public function getAll() {
        $query = $this->db->get('estudiante');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar un nuevo estudiante
    public function insert($data) {
        return $this->db->insert('estudiante', $data);
    }

    // Actualizar un estudiante por ID
    public function update($id, $data) {
        $this->db->where('codigo_est', $id);
        return $this->db->update('estudiante', $data);
    }

    // Obtener un estudiante por ID
    public function getById($id) {
        $this->db->where('codigo_est', $id);
        $query = $this->db->get('estudiante');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar un estudiante por ID
    public function delete($id) {
        $this->db->where('codigo_est', $id);
        return $this->db->delete('estudiante');
    }

    // Obtener estudiantes por curso
    public function getByCurso($codigo_cur) {
        $this->db->where('codigo_cur', $codigo_cur);
        $query = $this->db->get('estudiante');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Obtener estudiantes por usuario (relacionado con `codigo_usu`)
    public function getByUsuario($codigo_usu) {
        $this->db->where('codigo_usu', $codigo_usu);
        $query = $this->db->get('estudiante');
        return $query->num_rows() > 0 ? $query->result() : false;
    }
}
?>
