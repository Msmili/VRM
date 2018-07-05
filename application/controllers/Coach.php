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

            $data['liste'] = $this->seanceM->list_seance($idC);

            $this->loader('coach/seance',$data);
        }

        public function detail($idP=""){
            $data['detail'] = $this->seanceM->seance_programme($idP);

            $this->loader('coach/seance_programme',$data);
        }

        public function evaluation($idS=""){
            $data['infos'] = $this->evalM->getEvalUser($idS);
            $this->loader('coach/evaluation',$data);
        }

        public function add_eval($id=""){
            $note = (isset($_POST['accomplissement']))? $_POST['accomplissement'] : '' ;
            $com = (isset($_POST['comm']))? $_POST['comm'] : '' ;
            $valide = (isset($_POST['choix']))? $_POST['choix'] : '' ;
            $id_user = (isset($_POST['id']))? $_POST['id'] : '' ;

            $this->evalM->confirmEvalUser($note,$com,$valide, $id_user);

            $this->seance();
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

            $this->loader('coach/evaluation');
        }

        public function add_programme(){
            $i = 0;
            //Partie programme
            $title = $_POST['titre'];
            $desc = $_POST['description'];
            $prix = $_POST['prix'];
            $nb = $_POST['nb'];
            $id_coach = $_SESSION['id_coach'];

            $this->programmeM->addProgramme($title,$desc,$prix,$nb,$id_coach);

            $id_programme = $this->programmeM->last_programme();

            //Partie seance
            $titre_seance= $_POST['titre_seance'];
            $desc_seance = $_POST['description_seance'];
            //$date_seance = $_POST['date_seance'];
            $duree_seance = $_POST['duree_seance'];

            while($nb>$i) {
                $this->seanceM->addSeance($titre_seance, $desc_seance, $duree_seance, $id_programme['IdP']);
                $i++;
            }

            $this->loader('coach/seance');
        }
    }
