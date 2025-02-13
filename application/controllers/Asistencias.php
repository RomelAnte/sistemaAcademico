<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asistencias extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Asistencia');
    }

    public function index() {
        $data['asistencias'] = $this->Asistencia_model->getAll();
        $this->load->view('asistencia_view', $data);
    }

    public function agregar() {
        $data = array(
            'codigo_asi' => 'A001',
            'fecha_asi' => date('Y-m-d'),
            'hora_asi' => date('H:i:s'),
            'observacion_asi' => 'Asistencia registrada correctamente',
            'codigo_mat' => 'MAT001'
        );

        if ($this->Asistencia_model->insert($data)) {
            echo "Asistencia agregada correctamente.";
        } else {
            echo "Error al agregar la asistencia.";
        }
    }

    public function eliminar($id) {
        if ($this->Asistencia_model->delete($id)) {
            echo "Asistencia eliminada.";
        } else {
            echo "Error al eliminar.";
        }
    }
}
?>
