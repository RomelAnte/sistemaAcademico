<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroAsistencias extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('RegistroAsistencia');
    }

    // Mostrar todos los registros de asistencia
    public function index() {
        $data['registros'] = $this->RegistroAsistencia->getAll();
        $this->load->view('registro_asistencia_view', $data);
    }

    // Agregar un nuevo registro de asistencia
    public function agregar() {
        $data = array(
            'codigo_ra' => 'RA001',
            'estado_ra' => 'Presente',
            'codigo_asi' => 'ASI001',
            'codigo_est' => 'EST001'
        );

        if ($this->RegistroAsistencia->insert($data)) {
            echo "Registro de asistencia agregado correctamente.";
        } else {
            echo "Error al agregar el registro de asistencia.";
        }
    }

    // Eliminar un registro de asistencia por ID
    public function eliminar($id) {
        if ($this->RegistroAsistencia->delete($id)) {
            echo "Registro de asistencia eliminado.";
        } else {
            echo "Error al eliminar el registro de asistencia.";
        }
    }
}
?>
