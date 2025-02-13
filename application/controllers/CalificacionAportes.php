<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalificacionAportes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('CalificacionAporte');
    }

    // Mostrar todas las calificaciones de aportes
    public function index() {
        $data['calificaciones'] = $this->CalificacionAporte->getAll();
        $this->load->view('calificacion_aporte_view', $data);
    }

    // Agregar una nueva calificación de aporte
    public function agregar() {
        $data = array(
            'codigo_ca' => 'CA001',
            'calificacion_ca' => '95',
            'observacion_ca' => 'Muy buen aporte.',
            'codigo_apo' => 'APO001',
            'codigo_est' => 'EST001'
        );

        if ($this->CalificacionAporte->insert($data)) {
            echo "Calificación de aporte agregada correctamente.";
        } else {
            echo "Error al agregar la calificación de aporte.";
        }
    }

    // Eliminar una calificación de aporte por ID
    public function eliminar($id) {
        if ($this->CalificacionAporte->delete($id)) {
            echo "Calificación de aporte eliminada.";
        } else {
            echo "Error al eliminar la calificación de aporte.";
        }
    }
}
?>
