<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Curso');
    }

    // Mostrar todos los cursos
    public function index() {
        $data['cursos'] = $this->Curso->getAll();
        $this->load->view('cursos_view', $data);
    }

    // Agregar un nuevo curso
    public function agregar() {
        $data = array(
            'codigo_cur' => 'CUR001',
            'nombre_cur' => 'Matemáticas Avanzadas',
            'paralelo_cur' => 'A',
            'codigo_per' => 'PER001',
            'codigo_usu' => 'US001',
            'seccion_cur' => 'Sección 1'
        );

        if ($this->Curso->insert($data)) {
            echo "Curso agregado correctamente.";
        } else {
            echo "Error al agregar el curso.";
        }
    }

    // Eliminar un curso por ID
    public function eliminar($id) {
        if ($this->Curso->delete($id)) {
            echo "Curso eliminado.";
        } else {
            echo "Error al eliminar el curso.";
        }
    }
}
?>
