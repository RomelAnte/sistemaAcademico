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

    public function nuevo(){
        $this->load->view('header');
        $this->load->view('Usuarios/agregar');
        $this->load->view('footer');
    }
    public function agregar() {
        $data = array(
            'cedula_usu' => $this -> input->post('cedula_usu'),
            'nombre_usu' => $this -> input->post('nombre_usu'),
            'apellido_usu' => $this -> input->post('apellido_usu'),
            'username_usu' => $this -> input->post('username_usu'),
            'password_usu' => md5($this -> input->post('password_usu')),
            'perfil_usu' => $this -> input->post('perfil_usu'),
            'telefono_usu' => $this -> input->post('telefono_usu'),
            'estado_usu' => $this -> input->post('estado_usu'),
            'email_usu' => $this->input ->post('email_usu'),
            'parentesco_usu' => $this -> input->post('parentesco_usu'),
            'dece_usu' => $this-> input->post('dece_usu'),
        );

        $this->Usuario->insert($data);
        redirect('Usuarios/index');
    }

    /*public function eliminar($id) {
        if ($this->Usuario->delete($id)) {
            echo "Usuario eliminado.";
        } else {
            echo "Error al eliminar.";
        }
    }*/
}
?>
