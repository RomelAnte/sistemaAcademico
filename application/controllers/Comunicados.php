<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comunicados extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Comunicado');
    }

    // Mostrar todos los comunicados
    public function index() {
        $data['comunicados'] = $this->Comunicado->getAll();
        $this->load->view('comunicado_view', $data);
    }

    // Agregar un nuevo comunicado
    public function agregar() {
        $data = array(
            'codigo_com' => 'COM001',
            'mensaje_com' => 'Este es un mensaje importante.',
            'fecha_com' => '2025-02-13',
            'codigo_mat' => 'MAT001',
            'tipo_com' => 'Aviso'
        );

        if ($this->Comunicado->insert($data)) {
            echo "Comunicado agregado correctamente.";
        } else {
            echo "Error al agregar el comunicado.";
        }
    }

    // Eliminar un comunicado por ID
    public function eliminar($id) {
        if ($this->Comunicado->delete($id)) {
            echo "Comunicado eliminado.";
        } else {
            echo "Error al eliminar el comunicado.";
        }
    }
}
?>
