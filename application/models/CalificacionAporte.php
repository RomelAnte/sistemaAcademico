<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalificacionAporte extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todas las calificaciones de aportes
    public function getAll() {
        $query = $this->db->get('calificacionaporte');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar una nueva calificación de aporte
    public function insert($data) {
        return $this->db->insert('calificacionaporte', $data);
    }

    // Actualizar una calificación de aporte por ID
    public function update($id, $data) {
        $this->db->where('codigo_ca', $id);
        return $this->db->update('calificacionaporte', $data);
    }

    // Obtener una calificación de aporte por ID
    public function getById($id) {
        $this->db->where('codigo_ca', $id);
        $query = $this->db->get('calificacionaporte');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar una calificación de aporte por ID
    public function delete($id) {
        $this->db->where('codigo_ca', $id);
        return $this->db->delete('calificacionaporte');
    }

    // Obtener calificación de un aporte por estudiante
    public function getByEstudiante($codigo_est) {
        $this->db->where('codigo_est', $codigo_est);
        $query = $this->db->get('calificacionaporte');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Obtener calificación de un aporte por código de aporte
    public function getByAporte($codigo_apo) {
        $this->db->where('codigo_apo', $codigo_apo);
        $query = $this->db->get('calificacionaporte');
        return $query->num_rows() > 0 ? $query->result() : false;
    }
}
?>
