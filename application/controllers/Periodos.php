<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periodos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Periodo');
    }

    public function index() {
        $data['periodos'] = $this->Periodo_model->getAll();
        $this->load->view('periodo_view', $data);
    }

    public function agregar() {
        $data = array(
            'codigo_per' => 'P001',
            'nombre_per' => 'Periodo Académico 2025-1',
            'estado_per' => 'activo',
            'tipo_per' => 'Semestral'
        );

        if ($this->Periodo_model->insert($data)) {
            echo "Periodo agregado correctamente.";
        } else {
            echo "Error al agregar el periodo.";
        }
    }

    public function eliminar($id) {
        if ($this->Periodo_model->delete($id)) {
            echo "Periodo eliminado.";
        } else {
            echo "Error al eliminar.";
        }
    }
}
?>



