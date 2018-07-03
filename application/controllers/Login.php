<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
	{
        $this->load->helper('assets');
        $this->load->view('accueil');
	}

    public function loader($page="",$data = array()){
        $this->load->view('main/header');
        $this->load->view($page,$data);
        $this->load->view('main/footer');
    }

    public function signup(){
        $this->loader('connexion');
    }

	public function authentifier(){
	    $this->load->model('loginM');
	    $res = $this->loginM->connexion();

	    if($res == 'user'){
            $this->loader('accueil');
        }else if($res == 'coach'){
	        //$data['id'] = $_SESSION['id_coach'];
	        redirect('coach/programme');
            //$this->loader('coach/programme',$data['id']);
        }else{
            $this->loader('connexion');
        }
    }

    public function logout(){
	    session_destroy();
        $this->loader('accueil');
        redirect($this->index());
    }

    public function reset_password(){
        $res = $this->loginM->reset_password();

        if($res){
            $data['msg'] = 'Votre mot de passe a été modifié.';
        }else{
            $data['msg'] = 'Désolé mais vos mots de passes ne correspondent pas.';
        }

        $this->loader('connexion',$data);
//        $this->load->view('connexion');
    }
}
