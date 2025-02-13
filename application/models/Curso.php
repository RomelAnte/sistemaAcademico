<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todos los cursos
    public function getAll() {
        $query = $this->db->get('curso');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar un nuevo curso
    public function insert($data) {
        return $this->db->insert('curso', $data);
    }

    // Actualizar un curso por ID
    public function update($id, $data) {
        $this->db->where('codigo_cur', $id);
        return $this->db->update('curso', $data);
    }

    // Obtener un curso por ID
    public function getById($id) {
        $this->db->where('codigo_cur', $id);
        $query = $this->db->get('curso');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar un curso por ID
    public function delete($id) {
        $this->db->where('codigo_cur', $id);
        return $this->db->delete('curso');
    }

    // Obtener cursos por periodo
    public function getByPeriodo($codigo_per) {
        $this->db->where('codigo_per', $codigo_per);
        $query = $this->db->get('curso');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Obtener cursos por usuario
    public function getByUsuario($codigo_usu) {
        $this->db->where('codigo_usu', $codigo_usu);
        $query = $this->db->get('curso');
        return $query->num_rows() > 0 ? $query->result() : false;
    }
}
?>
