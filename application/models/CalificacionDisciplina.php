<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalificacionDisciplina extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todas las calificaciones de disciplinas
    public function getAll() {
        $query = $this->db->get('calificaciondisciplina');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar una nueva calificación de disciplina
    public function insert($data) {
        return $this->db->insert('calificaciondisciplina', $data);
    }

    // Actualizar una calificación de disciplina por ID
    public function update($id, $data) {
        $this->db->where('codigo_cd', $id);
        return $this->db->update('calificaciondisciplina', $data);
    }

    // Obtener una calificación de disciplina por ID
    public function getById($id) {
        $this->db->where('codigo_cd', $id);
        $query = $this->db->get('calificaciondisciplina');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar una calificación de disciplina por ID
    public function delete($id) {
        $this->db->where('codigo_cd', $id);
        return $this->db->delete('calificaciondisciplina');
    }

    // Obtener calificaciones de disciplina por estudiante
    public function getByEstudiante($codigo_est) {
        $this->db->where('codigo_est', $codigo_est);
        $query = $this->db->get('calificaciondisciplina');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Obtener calificaciones de disciplina por disciplina
    public function getByDisciplina($codigo_dis) {
        $this->db->where('codigo_dis', $codigo_dis);
        $query = $this->db->get('calificaciondisciplina');
        return $query->num_rows() > 0 ? $query->result() : false;
    }
}
?>
