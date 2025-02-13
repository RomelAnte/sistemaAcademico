<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplina extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todas las disciplinas
    public function getAll() {
        $query = $this->db->get('disciplina');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar una nueva disciplina
    public function insert($data) {
        return $this->db->insert('disciplina', $data);
    }

    // Actualizar una disciplina por ID
    public function update($id, $data) {
        $this->db->where('codigo_dis', $id);
        return $this->db->update('disciplina', $data);
    }

    // Obtener una disciplina por ID
    public function getById($id) {
        $this->db->where('codigo_dis', $id);
        $query = $this->db->get('disciplina');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar una disciplina por ID
    public function delete($id) {
        $this->db->where('codigo_dis', $id);
        return $this->db->delete('disciplina');
    }

    // Obtener disciplinas por materia
    public function getByMateria($codigo_mat) {
        $this->db->where('codigo_mat', $codigo_mat);
        $query = $this->db->get('disciplina');
        return $query->num_rows() > 0 ? $query->result() : false;
    }
}
?>
