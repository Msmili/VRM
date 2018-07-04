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
            $data['liste'] = $this->programmeM->list_prog($_SESSION['id_coach']);

            $this->loader('coach/programme',$data);
        }

        public function seance(){
            $idC = $_SESSION['id_coach'];
            $idP = 1;
            $data['liste'] = $this->seanceM->list_seance($idC, $idP);
            $this->loader('coach/seance',$data);
        }

        public function removePrg(){
            $id_prg = $_POST['id'];

            $this->programmeM->SupprimerProg($id_prg);
        }

        public function desactiverPrg(){
            $id_prg = $_POST['id'];

            $this->programmeM->DesactiverProg($id_prg);
        }

        public function activerPrg(){
            $id_prg = $_POST['id'];

            $this->programmeM->ActiverProg($id_prg);
        }

        public function detail_seance(){
            $id_seance = $_POST['id'];

            $this->loader('coach/detail');
        }
    }
