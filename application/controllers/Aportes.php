<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aportes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Aporte');
    }

    // Mostrar todos los aportes
    public function index() {
        $data['aportes'] = $this->Aporte->getAll();
        $this->load->view('aportes_view', $data);
    }

    // Agregar un nuevo aporte
    public function agregar() {
        $data = array(
            'codigo_apo' => 'APO001',
            'fechaenvio_apo' => '2025-02-13',
            'fechaentrega_apo' => '2025-02-20',
            'observacion_apo' => 'Aporte importante',
            'quimestre_apo' => 'Primer Quimestre',
            'codigo_mat' => 'MAT001',
            'codigo_tip' => 'TIP001'
        );

        if ($this->Aporte->insert($data)) {
            echo "Aporte agregado correctamente.";
        } else {
            echo "Error al agregar el aporte.";
        }
    }

    // Eliminar un aporte por ID
    public function eliminar($id) {
        if ($this->Aporte->delete($id)) {
            echo "Aporte eliminado.";
        } else {
            echo "Error al eliminar el aporte.";
        }
    }
}
?>
