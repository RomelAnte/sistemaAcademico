<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notificacion extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todas las notificaciones
    public function getAll() {
        $query = $this->db->get('notificacion');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar una nueva notificación
    public function insert($data) {
        return $this->db->insert('notificacion', $data);
    }

    // Actualizar una notificación por ID
    public function update($id, $data) {
        $this->db->where('codigo_noti', $id);
        return $this->db->update('notificacion', $data);
    }

    // Obtener una notificación por ID
    public function getById($id) {
        $this->db->where('codigo_noti', $id);
        $query = $this->db->get('notificacion');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar una notificación por ID
    public function delete($id) {
        $this->db->where('codigo_noti', $id);
        return $this->db->delete('notificacion');
    }
}
?>
