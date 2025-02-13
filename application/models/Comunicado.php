<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comunicado extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todos los comunicados
    public function getAll() {
        $query = $this->db->get('comunicado');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar un nuevo comunicado
    public function insert($data) {
        return $this->db->insert('comunicado', $data);
    }

    // Actualizar un comunicado por ID
    public function update($id, $data) {
        $this->db->where('codigo_com', $id);
        return $this->db->update('comunicado', $data);
    }

    // Obtener un comunicado por ID
    public function getById($id) {
        $this->db->where('codigo_com', $id);
        $query = $this->db->get('comunicado');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar un comunicado por ID
    public function delete($id) {
        $this->db->where('codigo_com', $id);
        return $this->db->delete('comunicado');
    }

    // Obtener comunicados por materia
    public function getByMateria($codigo_mat) {
        $this->db->where('codigo_mat', $codigo_mat);
        $query = $this->db->get('comunicado');
        return $query->num_rows() > 0 ? $query->result() : false;
    }
}
?>
