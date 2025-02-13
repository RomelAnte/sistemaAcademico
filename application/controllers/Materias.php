<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materias extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Materia');
    }

    // Mostrar todas las materias
    public function index() {
        $data['materias'] = $this->Materia->getAll();
        $this->load->view('materias_view', $data);
    }

    // Agregar una nueva materia
    public function agregar() {
        $data = array(
            'codigo_mat' => 'MAT001',
            'nombre_mat' => 'Física Moderna',
            'codigo_usu' => 'US001',
            'codigo_cur' => 'CUR001'
        );

        if ($this->Materia->insert($data)) {
            echo "Materia agregada correctamente.";
        } else {
            echo "Error al agregar la materia.";
        }
    }

    // Eliminar una materia por ID
    public function eliminar($id) {
        if ($this->Materia->delete($id)) {
            echo "Materia eliminada.";
        } else {
            echo "Error al eliminar la materia.";
        }
    }
}
?>
