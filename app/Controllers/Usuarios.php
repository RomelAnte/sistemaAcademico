<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Usuarios extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this -> load -> Model('Usuario');
        }

        public function index(){
            $data['usarios'] = $this -> User -> getData();

            $this -> load -> view('');
            $this -> load -> view('');
            $this -> load -> view('');
        }

    }
?>