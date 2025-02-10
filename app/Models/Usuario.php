<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Usuario extends CI_Model{
        function __construct(){
            parent::__construct();
        }

        function getData(){
            $listUser = $this -> db -> get('usuario');
            if($listUser -> num_rows() > 0){
                return $listUser -> result();
            }
            else{
                return false;
            }
        }
    }
?>