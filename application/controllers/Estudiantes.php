<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiantes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Estudiante');
    }

    public function index() {
        $data['estudiantes'] = $this->Estudiante_model->getAll();
        $this->load->view('estudiantes_view', $data);
    }

    public function agregar() {
        $data = array(
            'codigo_est' => 'E001',
            'nombre_est' => 'Juan Pérez',
            'cedula_est' => '1102345678',
            'fechanacimiento_est' => '2005-06-15',
            'direccion_est' => 'Calle Principal 123',
            'lugarnacimiento_est' => 'Quito',
            'nombrepadre_est' => 'Carlos Pérez',
            'cedulapadre_est' => '1109876543',
            'nombremadre_est' => 'Ana López',
            'cedulamadre_est' => '1108765432',
            'codigo_cur' => 'CUR001',
            'codigo_usu' => 'U001'
        );

        if ($this->Estudiante_model->insert($data)) {
            echo "Estudiante agregado correctamente.";
        } else {
            echo "Error al agregar el estudiante.";
        }
    }

    public function eliminar($id) {
        if ($this->Estudiante_model->delete($id)) {
            echo "Estudiante eliminado.";
        } else {
            echo "Error al eliminar.";
        }
    }
}
?>
