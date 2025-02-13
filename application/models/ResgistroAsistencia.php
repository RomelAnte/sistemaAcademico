
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registroasistencia extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todos los registros de asistencia
    public function getAll() {
        $query = $this->db->get('registroasistencia');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Insertar un nuevo registro de asistencia
    public function insert($data) {
        return $this->db->insert('registroasistencia', $data);
    }

    // Actualizar un registro de asistencia por ID
    public function update($id, $data) {
        $this->db->where('codigo_ra', $id);
        return $this->db->update('registroasistencia', $data);
    }

    // Obtener un registro de asistencia por ID
    public function getById($id) {
        $this->db->where('codigo_ra', $id);
        $query = $this->db->get('registroasistencia');
        return $query->num_rows() > 0 ? $query->row() : false;
    }

    // Eliminar un registro de asistencia por ID
    public function delete($id) {
        $this->db->where('codigo_ra', $id);
        return $this->db->delete('registroasistencia');
    }

    // Obtener registros de asistencia por código de asistencia
    public function getByAsistencia($codigo_asi) {
        $this->db->where('codigo_asi', $codigo_asi);
        $query = $this->db->get('registroasistencia');
        return $query->num_rows() > 0 ? $query->result() : false;
    }

    // Obtener registros de asistencia por estudiante
    public function getByEstudiante($codigo_est) {
        $this->db->where('codigo_est', $codigo_est);
        $query = $this->db->get('registroasistencia');
        return $query->num_rows() > 0 ? $query->result() : false;
    }
}
?>
