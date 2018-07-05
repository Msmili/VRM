<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class User extends CI_Controller {
        public function index()
        {
            $this->load->helper('assets');
            $this->load->view('programme');
        }
        public function loader($page="",$data = array()){
            $this->load->view('main/header');
            $this->load->view($page,$data);
            $this->load->view('main/footer');
        }
        public function programme(){
            $data['liste'] = $this->programmeM->list_prog($_SESSION['id_coach']);
            $this->loader('coach/programme',$data);
        }
        public function seance(){
            $idC = $_SESSION['id_coach'];
            $data['liste'] = $this->seanceM->list_seance($idC);
            $this->loader('coach/seance',$data);
        }
        public function list_prog(){
			$idU = $_SESSION['id_user'];
            $data['programmes'] = $this->seanceM->seance_programme($idU);
            $this->loader('user/Suiviprogramme',$data);
        }
      
    }