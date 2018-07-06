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

        public function programme(){
            $data['liste'] = $this->programmeM->user_prog($_SESSION['id_user']);

            $this->loader('user/suiviP',$data);
        }

        public function detail($id=""){
            $data['pack'] = $this->userM->detail_pack($id);

            $this->loader('user/detail',$data);
        }

        public function profil(){
            $id = $_SESSION['id_user'];
            $data['infos'] = $this->loginM->selectUser($id);
            $data['ttSeance'] = $this->seanceM->allSeance($id);
            $data['dtSeance'] = $this->seanceM->dtSeance($id);
            $data['perf'] = $this->evalM->note($id);

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

        public function seance(){
            $idU = $_SESSION['id_user'];
            $data['liste'] = $this->seanceM->list_seanceUser($idU);
            $this->loader('user/seance',$data);
        }
        public function seanceP($id=""){
            $idU = $_SESSION['id_user'];
            $data['liste'] = $this->seanceM->seance_pack($id,$idU);
            $this->loader('user/seanceP',$data);
        }

        public function evaluation($idS=""){
            $data['infos'] = $this->evalM->getEvalUser($idS);
            $this->loader('user/eval',$data);
        }

        public function add_eval(){
            $ressenti = (isset($_POST['ressenti']))? $_POST['ressenti'] : '' ;
            $difficulte = (isset($_POST['difficulte']))? $_POST['difficulte'] : '' ;
            $avis = (isset($_POST['avis']))? $_POST['avis'] : '' ;
            $id_user = (isset($_POST['id']))? $_POST['id'] : '' ;

            $this->evalM->updateEvalUser($ressenti,$difficulte,$avis, $id_user);

            $this->seance();
        }

        public function inscription(){
            $prenom = (isset($_POST['prenom']))? $_POST['prenom'] : '' ;
            $nom = (isset($_POST['nom']))? $_POST['nom'] : '' ;
            $datenaiss = (isset($_POST['naiss']))? $_POST['naiss'] : '' ;
            $sex = (isset($_POST['sex']))? $_POST['sex'] : '' ;
            $email = (isset($_POST['email']))? $_POST['email'] : '' ;
            $tel = (isset($_POST['tel']))? $_POST['tel'] : '' ;
            $adr = (isset($_POST['adr']))? $_POST['adr'] : '' ;
            $ville = (isset($_POST['ville']))? $_POST['ville'] : '' ;
            $cp = (isset($_POST['cp']))? $_POST['cp'] : '' ;
            $pass = (isset($_POST['pass']))? $_POST['pass'] : '' ;
            $poids = (isset($_POST['poids']))? $_POST['poids'] : '' ;
            $taille = (isset($_POST['taille']))? $_POST['taille'] : '' ;

            $this->loginM->newUser($nom,$prenom,$datenaiss,$sex,$email,$pass,$tel,$adr,$ville,$cp,$poids,$taille);
            $this->loader('connexion');
        }

    }