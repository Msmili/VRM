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

        public function profil(){
            $id = $_SESSION['id_user'];
            $data['infos'] = $this->loginM->selectUser($id);

            $this->loader('user/profil',$data);
        }

        public function modification(){
            $sex = (isset($_POST['sex']))? $_POST['sex'] : '' ;
            $email = (isset($_POST['email']))? $_POST['email'] : '' ;
            $tel = (isset($_POST['tel']))? $_POST['tel'] : '' ;
            $adr = (isset($_POST['adr']))? $_POST['adr'] : '' ;
            $ville = (isset($_POST['ville']))? $_POST['ville'] : '' ;
            $cp = (isset($_POST['cp']))? $_POST['cp'] : '' ;
            $pass = (isset($_POST['pass']))? $_POST['pass'] : '' ;
            $poids = (isset($_POST['poids']))? $_POST['poids'] : '' ;

            $tab = array('SexeU'=>$sex,'EmailU'=>$email,'TelephoneU'=>$tel,'AdresseU'=>$adr,'VilleU'=>$ville,'CodePostalU'=>$cp,'PasswordU'=>$pass,'PoidsU'=>$poids);

            $this->userM->updateData($tab);

            $this->profil();
        }
        public function evaluation(){
            $ressenti = (isset($_POST['ressenti']))? $_POST['ressenti'] : '' ;
            $difficulte = (isset($_POST['difficulte']))? $_POST['difficulte'] : '' ;
            $avis = (isset($_POST['avis']))? $_POST['avis'] : '' ;

            $this->evalM->updateEvalUser($ressenti,$difficulte,$avis);

            $this->profil();
        }
    }