<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoAportes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TipoAporte');
    }

    public function index() {
        $data['tipoaportes'] = $this->Tipoaporte_model->getAll();
        $this->load->view('tipoaporte_view', $data);
    }

    public function agregar() {
        $data = array(
            'codigo_tip' => 'T001',
            'nombre_tip' => 'Aporte voluntario',
            'porcentaje_tip' => 5.00
        );

        if ($this->Tipoaporte_model->insert($data)) {
            echo "Tipo de aporte agregado correctamente.";
        } else {
            echo "Error al agregar el tipo de aporte.";
        }
    }

    public function eliminar($id) {
        if ($this->Tipoaporte_model->delete($id)) {
            echo "Tipo de aporte eliminado.";
        } else {
            echo "Error al eliminar.";
        }
    }
}
?>
