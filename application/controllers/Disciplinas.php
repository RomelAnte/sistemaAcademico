<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplinas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Disciplina');
    }

    // Mostrar todas las disciplinas
    public function index() {
        $data['disciplinas'] = $this->Disciplina->getAll();
        $this->load->view('disciplina_view', $data);
    }

    // Agregar una nueva disciplina
    public function agregar() {
        $data = array(
            'codigo_dis' => 'DIS001',
            'fecha_dis' => '2025-02-13',
            'observacion_dis' => 'Disciplina importante.',
            'codigo_mat' => 'MAT001'
        );

        if ($this->Disciplina->insert($data)) {
            echo "Disciplina agregada correctamente.";
        } else {
            echo "Error al agregar la disciplina.";
        }
    }

    // Eliminar una disciplina por ID
    public function eliminar($id) {
        if ($this->Disciplina->delete($id)) {
            echo "Disciplina eliminada.";
        } else {
            echo "Error al eliminar la disciplina.";
        }
    }
}
?>
