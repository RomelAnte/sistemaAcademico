<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notificaciones extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Notificacion');
    }

    public function index() {
        $data['notificaciones'] = $this->Notificacion->getAll();
        $this->load->view('notificaciones_view', $data);
    }

    public function agregar() {
        $data = array(
            'codigo_noti' => 'N001',
            'fecha_noti' => '2025-02-13',
            'asunto_noti' => 'Nueva Notificación',
            'mensaje_noti' => 'Este es un mensaje de prueba para la notificación.'
        );

        if ($this->Notificacion->insert($data)) {
            echo "Notificación agregada correctamente.";
        } else {
            echo "Error al agregar la notificación.";
        }
    }

    public function eliminar($id) {
        if ($this->Notificacion->delete($id)) {
            echo "Notificación eliminada.";
        } else {
            echo "Error al eliminar la notificación.";
        }
    }
}
?>
