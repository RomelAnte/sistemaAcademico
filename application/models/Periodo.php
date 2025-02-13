<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periodo extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todos los periodos
    public function getAll() {
        $query = $this->db->get('periodo');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar un nuevo periodo
    public function insert($data) {
        return $this->db->insert('periodo', $data);
    }

    // Actualizar un periodo por ID
    public function update($id, $data) {
        $this->db->where('codigo_per', $id);
        return $this->db->update('periodo', $data);
    }

    // Obtener un periodo por ID
    public function getById($id) {
        $this->db->where('codigo_per', $id);
        $query = $this->db->get('periodo');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar un periodo por ID
    public function delete($id) {
        $this->db->where('codigo_per', $id);
        return $this->db->delete('periodo');
    }

    // Obtener periodos por estado (activo o inactivo)
    public function getByEstado($estado) {
        $this->db->where('estado_per', $estado);
        $query = $this->db->get('periodo');
        return $query->num_rows() > 0 ? $query->result() : false;
    }
}
?>