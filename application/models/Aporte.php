<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aporte extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todos los aportes
    public function getAll() {
        $query = $this->db->get('aporte');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar un nuevo aporte
    public function insert($data) {
        return $this->db->insert('aporte', $data);
    }

    // Actualizar un aporte por ID
    public function update($id, $data) {
        $this->db->where('codigo_apo', $id);
        return $this->db->update('aporte', $data);
    }

    // Obtener un aporte por ID
    public function getById($id) {
        $this->db->where('codigo_apo', $id);
        $query = $this->db->get('aporte');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar un aporte por ID
    public function delete($id) {
        $this->db->where('codigo_apo', $id);
        return $this->db->delete('aporte');
    }

    // Obtener aportes por materia
    public function getByMateria($codigo_mat) {
        $this->db->where('codigo_mat', $codigo_mat);
        $query = $this->db->get('aporte');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Obtener aportes por tipo de aporte
    public function getByTipoAporte($codigo_tip) {
        $this->db->where('codigo_tip', $codigo_tip);
        $query = $this->db->get('aporte');
        return $query->num_rows() > 0 ? $query->result() : false;
    }
}
?>
