<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class user	extends CI_Controller {
        public function index()
        {
            $this->load->helper('assets');
            $this->load->view('Seance');
        }
        public function loader($page="",$data = array()){
            $this->load->view('main/header');
            $this->load->view($page,$data);
            $this->load->view('main/footer');
        }
        public function modifier(){
            $this->load->model('userM');
            $data['liste'] = $this->userM->liste_prog($_SESSION['idU']);
            $this->loader('user/profil',$data);
        }

        public function pack(){
            $data['list'] = $this->userM->liste_pack();

            $this->loader('user/pack',$data);
        }

        public function detail($id=""){
            $data['pack'] = $this->userM->detail_pack($id);

            $this->loader('user/detail',$data);
        }
    }