<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoAporte extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todos los tipos de aporte
    public function getAll() {
        $query = $this->db->get('tipoaporte');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar un nuevo tipo de aporte
    public function insert($data) {
        return $this->db->insert('tipoaporte', $data);
    }

    // Actualizar un tipo de aporte por ID
    public function update($id, $data) {
        $this->db->where('codigo_tip', $id);
        return $this->db->update('tipoaporte', $data);
    }

    // Obtener un tipo de aporte por ID
    public function getById($id) {
        $this->db->where('codigo_tip', $id);
        $query = $this->db->get('tipoaporte');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar un tipo de aporte por ID
    public function delete($id) {
        $this->db->where('codigo_tip', $id);
        return $this->db->delete('tipoaporte');
    }
}
?>
