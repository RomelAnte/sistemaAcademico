<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario');
    }

    public function index() {
        $data['usuarios'] = $this->Usuario->getAll();
        $this->load->view('header', $data);
        $this->load->view('Usuarios/index', $data);
        $this->load->view('footer', $data);
    }

    /*public function agregar() {
        $data = array(
            'codigo_usu' => 'U001',
            'cedula_usu' => '1723456789',
            'nombre_usu' => 'Juan',
            'apellido_usu' => 'Pérez',
            'username_usu' => 'juanp',
            'password_usu' => md5('123456'), // Se recomienda usar password_hash()
            'imagen_usu' => 'default.png',
            'perfil_usu' => 'Administrador',
            'telefono_usu' => '0987654321',
            'estado_usu' => 'activo',
            'email_usu' => 'juan@example.com',
            'parentesco_usu' => 'N/A',
            'dece_usu' => 'N/A',
            'cv_usu' => 'juan_cv.pdf'
        );

        if ($this->Usuario->insert($data)) {
            echo "Usuario agregado correctamente.";
        } else {
            echo "Error al agregar el usuario.";
        }
    }

    public function eliminar($id) {
        if ($this->Usuario->delete($id)) {
            echo "Usuario eliminado.";
        } else {
            echo "Error al eliminar.";
        }
    }*/
}
?>
