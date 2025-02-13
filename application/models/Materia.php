<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materia extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todas las materias
    public function getAll() {
        $query = $this->db->get('materia');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar una nueva materia
    public function insert($data) {
        return $this->db->insert('materia', $data);
    }

    // Actualizar una materia por ID
    public function update($id, $data) {
        $this->db->where('codigo_mat', $id);
        return $this->db->update('materia', $data);
    }

    // Obtener una materia por ID
    public function getById($id) {
        $this->db->where('codigo_mat', $id);
        $query = $this->db->get('materia');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar una materia por ID
    public function delete($id) {
        $this->db->where('codigo_mat', $id);
        return $this->db->delete('materia');
    }

    // Obtener materias por usuario
    public function getByUsuario($codigo_usu) {
        $this->db->where('codigo_usu', $codigo_usu);
        $query = $this->db->get('materia');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Obtener materias por curso
    public function getByCurso($codigo_cur) {
        $this->db->where('codigo_cur', $codigo_cur);
        $query = $this->db->get('materia');
        return $query->num_rows() > 0 ? $query->result() : false;
    }
}
?>
