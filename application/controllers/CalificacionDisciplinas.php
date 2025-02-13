<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalificacionDisciplinas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('CalificacionDisciplina');
    }

    // Mostrar todas las calificaciones de disciplinas
    public function index() {
        $data['calificaciones'] = $this->CalificacionDisciplina->getAll();
        $this->load->view('calificacion_disciplina_view', $data);
    }

    // Agregar una nueva calificación de disciplina
    public function agregar() {
        $data = array(
            'codigo_cd' => 'CD001',
            'calificacion_cd' => '90',
            'observacion_cd' => 'Buen desempeño',
            'codigo_dis' => 'DIS001',
            'codigo_est' => 'EST001'
        );

        if ($this->CalificacionDisciplina->insert($data)) {
            echo "Calificación de disciplina agregada correctamente.";
        } else {
            echo "Error al agregar la calificación de disciplina.";
        }
    }

    // Eliminar una calificación de disciplina por ID
    public function eliminar($id) {
        if ($this->CalificacionDisciplina->delete($id)) {
            echo "Calificación de disciplina eliminada.";
        } else {
            echo "Error al eliminar la calificación de disciplina.";
        }
    }
}
?>
