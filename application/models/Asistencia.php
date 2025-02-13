<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asistencia extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todas las asistencias
    public function getAll() {
        $query = $this->db->get('asistencia');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar una nueva asistencia
    public function insert($data) {
        return $this->db->insert('asistencia', $data);
    }

    // Actualizar una asistencia por ID
    public function update($id, $data) {
        $this->db->where('codigo_asi', $id);
        return $this->db->update('asistencia', $data);
    }

    // Obtener una asistencia por ID
    public function getById($id) {
        $this->db->where('codigo_asi', $id);
        $query = $this->db->get('asistencia');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar una asistencia por ID
    public function delete($id) {
        $this->db->where('codigo_asi', $id);
        return $this->db->delete('asistencia');
    }

    // Obtener asistencias por código de materia
    public function getByCodigoMat($codigo_mat) {
        $this->db->where('codigo_mat', $codigo_mat);
        $query = $this->db->get('asistencia');
        return $query->num_rows() > 0 ? $query->result() : false;
    }
}
?>