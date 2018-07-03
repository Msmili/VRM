<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Coach extends CI_Controller {

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
            $this->load->model('coachM');

            $data['liste'] = $this->coachM->liste_prog($_SESSION['id_coach']);

            $this->loader('coach/programme',$data);
        }


    }
