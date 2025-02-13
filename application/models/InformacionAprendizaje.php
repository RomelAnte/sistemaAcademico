<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InformeAprendizaje extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todos los informes de aprendizaje
    public function getAll() {
        $query = $this->db->get('informe_aprendizaje');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar un nuevo informe de aprendizaje
    public function insert($data) {
        return $this->db->insert('informe_aprendizaje', $data);
    }

    // Actualizar un informe de aprendizaje por ID
    public function update($id, $data) {
        $this->db->where('codigo_ia', $id);
        return $this->db->update('informe_aprendizaje', $data);
    }

    // Obtener un informe de aprendizaje por ID
    public function getById($id) {
        $this->db->where('codigo_ia', $id);
        $query = $this->db->get('informe_aprendizaje');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar un informe de aprendizaje por ID
    public function delete($id) {
        $this->db->where('codigo_ia', $id);
        return $this->db->delete('informe_aprendizaje');
    }

    // Obtener informes por estudiante
    public function getByEstudiante($fk_codigo_est) {
        $this->db->where('fk_codigo_est', $fk_codigo_est);
        $query = $this->db->get('informe_aprendizaje');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Obtener informes por materia
    public function getByMateria($fk_codigo_mat) {
        $this->db->where('fk_codigo_mat', $fk_codigo_mat);
        $query = $this->db->get('informe_aprendizaje');
        return $query->num_rows() > 0 ? $query->result() : false;
    }
}
?>
