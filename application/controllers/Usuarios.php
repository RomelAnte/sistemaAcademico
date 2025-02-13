<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Usuarios extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this -> load -> Model('Usuario');
        }

        public function index(){
            $data['usarios'] = $this -> Usuario -> getData();

            $this -> load -> view('header');
            $this -> load -> view('index');
            $this -> load -> view('footer');
        }

    }
?>