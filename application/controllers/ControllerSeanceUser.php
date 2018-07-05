<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class User extends CI_Controller {
        public function index()
        {
            $this->load->helper('assets');
            $this->load->view('seance');
        }
        public function loader($page="",$data = array()){
            $this->load->view('main/header');
            $this->load->view($page,$data);
            $this->load->view('main/footer');
        }
        public function seance(){
            $idU = $_SESSION['id_User'];
            $data['liste'] = $this->seanceM->list_seanceUser($idU);
            $this->loader('user/seance',$data);
        }
		}