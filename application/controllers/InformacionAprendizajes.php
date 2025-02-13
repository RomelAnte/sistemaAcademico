<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InformesAprendizaje extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('InformeAprendizaje');
    }

    // Mostrar todos los informes de aprendizaje
    public function index() {
        $data['informes'] = $this->InformeAprendizaje->getAll();
        $this->load->view('informe_aprendizaje_view', $data);
    }

    // Agregar un nuevo informe de aprendizaje
    public function agregar() {
        $data = array(
            'codigo_ia' => 'IA001',
            'fk_codigo_est' => 'EST001',
            'fk_codigo_mat' => 'MAT001',
            'quimestre_ia' => 'Primer Quimestre',
            'promedio_primer_parcial_ia' => 7.5,
            'promedio_segundo_parcial_ia' => 8.0,
            'promedio_parciales_ia' => 7.75,
            'equivalencia_parciales_ia' => 'A',
            'evaluacion_sumativa_ia' => 8.5,
            'equivalencia_evaluacion_sumativa_ia' => 'A+',
            'promedio_quimestral_letras_ia' => 'A',
            'promedio_quimestral_ia' => 8.0,
            'comportamiento_ia' => 'Bueno',
            'recomendaciones_ia' => 'Seguir participando activamente.'
        );

        if ($this->InformeAprendizaje->insert($data)) {
            echo "Informe de aprendizaje agregado correctamente.";
        } else {
            echo "Error al agregar el informe de aprendizaje.";
        }
    }

    // Eliminar un informe de aprendizaje por ID
    public function eliminar($id) {
        if ($this->InformeAprendizaje->delete($id)) {
            echo "Informe de aprendizaje eliminado.";
        } else {
            echo "Error al eliminar el informe de aprendizaje.";
        }
    }
}
?>
